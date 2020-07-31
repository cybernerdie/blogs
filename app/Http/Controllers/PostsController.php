<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostType;

class PostsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $posts = Post::get();
      $posttypes = PostType::get();
      return view('backend.posts')->with(['posts' => $posts, 'posttypes' => $posttypes]);
    }

      public function store(Request $request){
      $request->validate([
          'title' => 'required',
          'slug' => 'required',
          'body' => 'required',
          'post_type_id' => 'required',
          'post_image' => 'image|max:1999'
        ]);
  
        $filenameWithExt = $request->file('post_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('post_image')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path= $request->file('post_image')->storeAs('public/posts_image', $filenameToStore);
  
        // Create post
        $posts = new Post;
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        $posts->slug = $request->input('title');
        $posts->post_type_id = $request->input('post_type_id');
        $posts->post_image = $filenameToStore;
        $posts->save();

        return redirect()->back()->with('success','Post Created Successfully');
        }

        public function update(Request $request)
        {
            $post = array(
                'title' => $request->title,
                'slug' => $request->title,
                'body' => $request->body,
                'post_type_id' => $request->post_type_id,
                'post_image' => $request->post_image,
        );

        Post::findOrfail($request->post_id)->update($post);
        
        return redirect()->back()->with('success','Post Updated Successfully');
        }
  
        public function delete($id)
        {
            $post = Post::find($id);
            $post->delete();
            return redirect()->back()->with('message','Post Deleted Successfully');
        }

}
