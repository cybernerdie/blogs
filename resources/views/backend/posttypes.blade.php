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
              <h2>Add Post Type</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('addposttype')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
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
              <h2>Post Types</h2>
              <div class="clearfix"></div>
            </div>
            @php($no=0)
            @if(count($posttypes) > 0)
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <?php  $no=1; ?>
                    @foreach($posttypes as $type)
                  <tr>
                  <td>{{$no++}}</td>
                    <td>{{$type->name}}</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-type_id="{{$type->id}}" data-name="{{$type->name}}">
                     Edit
                    </button>
                  </td>
                    <td><form class="delete" action="{{ route('deleteposttype', $type->id) }}" method="POST">
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
        <form action="{{route('editposttype','type_id')}}" method="post">
          @csrf

          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
            <input type="hidden" id="type_id" name="type_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update PostType</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $('#exampleModal').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget)
  var name = button.data('name')
  var type_id = button.data('type_id')
  var modal = $(this)
  modal.find('.modal-title').text('Edit PostType');
  modal.find('.modal-body #name').val(name);
  modal.find('.modal-body #type_id').val(type_id);
  });
  </script>
         @endsection
