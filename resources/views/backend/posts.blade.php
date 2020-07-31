@extends('backend.layouts.app')

@section('content')   <!-- page content -->
<div class="right_col" role="main">
  @if ($message = Session::get('success'))
  <div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>	
          <strong>{{ $message }}</strong>
  </div>
  @endif
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Add Post</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('addpost')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="title" name="title" class="form-control col-md-7 col-xs-12" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="body">Body <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea type="text" id="body" class="form-control col-md-7 col-xs-12" name="body" cols="10" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="post_type" class="control-label col-md-3 col-sm-3 col-xs-12">Post Type</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="post_type_id"  id="post_type_id" class="form-control col-md-7 col-xs-12" required>
                      @if(count($posttypes) > 0)
                      @foreach($posttypes as $type)
                      <option value="{{ $type->id }}">{{ $type->name }}</option>
                      @endforeach
                      @endif
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Post Image</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="post_image" class="form-control col-md-7 col-xs-12" name="post_image" required>

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Post List</h2>
              <div class="clearfix"></div>
            </div>
            @php($no=0)
            @if(count($posts) > 0)
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Post Type</th>
                    <th>Post Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <?php  $no=1; ?>
                    @foreach($posts as $post)
                  <tr>
                  <td>{{$no++}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->post_type_id}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->post_image}}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-post_id="{{$post->id}}" data-title="{{$post->title}}" data-body="{{$post->body}}" data-post_type_id="{{$post->post_type_id}}">
                       Edit
                      </button>
                    </td>
                    <td><form class="delete" action="{{ route('deletepost', $post->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form></td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
            @else

          	<div class="alert alert-danger">No record found</div>

          	@endif
          </div>
        </div>
      </div>
          </div>

          
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel" style="display: inline-block">New message</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('editpost','post_id')}}" method="post">
          @csrf

          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>

          <div class="form-group">
            <label for="body" class="col-form-label">Body</label>
            <textarea id="body" required="required" class="form-control" name="body" cols="10" required></textarea>
          </div>

          <div class="form-group">
            <label for="post_type_id" class="col-form-label">Post Type:</label>
            <select name="post_type_id"  id="post_type_id" class="form-control col-md-7 col-xs-12">
              @if(count($posttypes) > 0)
              @foreach($posttypes as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
              @endforeach
              @endif
          </select>
          </div>
          <div class="form-group">
            <label for="post_image" class="col-form-label">Post Image:</label>
            <input type="file" class="form-control" id="post_image" name="post_image">
          </div>
            <input type="hidden" id="post_id" name="post_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Post</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $('#exampleModal').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget)
  var title = button.data('title')
  var body = button.data('body')
  var post_type_id = button.data('post_type_id')
  var post_image = button.data('post_image')
  var post_id = button.data('post_id')
  var modal = $(this)
  modal.find('.modal-title').text('Edit Post');
  modal.find('.modal-body #title').val(title);
  modal.find('.modal-body #body').val(body);
  modal.find('.modal-body #post_type_id').val(post_type_id);
  modal.find('.modal-body #post_image').val(post_image);
  modal.find('.modal-body #post_id').val(post_id);
  });
  </script>
         @endsection
