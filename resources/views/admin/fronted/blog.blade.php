@extends('admin.layout.app')
@section('content')
<div class="container">
<!-- <a href="{{ route('blog_create') }}" class="btn btn-primary btn-lg m-5">Create New Blog</a> -->

<div class="row mt-5">
  <div class="col-md-8 mb-2">
    <a href="{{ route('blog_create') }}" class="btn btn-primary btn-lg">Create New Blog</a>
  </div>
  <div class="col-md-4" >
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search" value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('admin_blog') }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
        </div> 
      </form>
    </div>
  </div>
</div>


<table class="table-responsive table table-default table-secondary" >
    <thead>
    <tr> 
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
            <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Status ON/OFF</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($blog_data as $key=>$data)
      
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->title }}</td>
      <td>{{ $data->date }}</td>

      <td>{{ $data->description }}</td>
      <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->image) }}" class="rounded" width="200px" alt="img">
      </td>

      <td>
      @if($data->status == 1)
          <label class="badge badge-success">Published</label>
        @else
          <label class="badge badge-danger">UnPublished</label>
        @endif
      </td>
        
      <td>
      @if($data->status == 1)
      <span><a class="btn btn-outline-success btn-xs" href="{{url('softblog_active',$data->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
      <!-- <span style="color:green">Active</span> -->
      @else
      <span><a class="btn btn-outline-danger btn-xs" href="{{url('softblog_unactive',$data->id)}}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
      <!-- <span style="color:red">UnActive</span> -->
      @endif
      </td>

      <td>
        <a href="{{ route('blog_delete',$data->id) }}" class="btn btn-outline-danger mb-2"><i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
          <a href="{{ route('blog_update',$data->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil-square" aria-hidden="true"></i>
          </a>
      </td>
    </tr>
    @endforeach

   
  </tbody> 


</table>

</div>
@endsection