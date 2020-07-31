<?php

namespace App\Http\Controllers;
use App\PostType;
use App\Post;

use Illuminate\Http\Request;

class PostTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $posttypes = PostType::get();
      return view('backend.posttypes')->with('posttypes', $posttypes);
    }

      public function store(Request $request){
        $this->validate($request, [
          'name' => 'required',
        ]);
  
        $posttype = new PostType;
        $posttype->name = $request->input('name');
        $posttype->save();

        return redirect()->back()->with('success','PostType Created Successfully');
        }

        public function update(Request $request)
        {
            $posttype = array(
                'name' => $request->name,
        );

        PostType::findOrfail($request->type_id)->update($posttype);
        
        return redirect()->back()->with('success','PostType Updated Successfully');
        }

        public function delete($id)
        {
            $posttype = PostType::find($id);
            $posttype->delete();
            return redirect()->back()->with('success','PostType Deleted Successfully');
        }
}
