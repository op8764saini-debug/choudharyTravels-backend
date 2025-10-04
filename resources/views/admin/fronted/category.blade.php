@extends('admin.layout.app')

@section('content')
<div class="main-panel">
  <!-- Option 1: Include in HTML -->
  <div class="content-wrapper">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<!-- <a href="{{ route('category_create') }}" class="btn btn-primary btn-lg m-5">Create New Category</a> -->
<div class="row">
  <div class="col-md-8 mb-2">
    <a href="{{ route('category_create') }}" class="btn btn-primary btn-lg">Create New Category</a>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search" value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('admin_category') }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
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
      <th scope="col">Description</th>
      <th scope="col">Short Description</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Status ON/OFF</th>
      <th scope="col">Action</th>
    </tr> 
  </thead>
  <tbody>
    @foreach ($s_da as $key=>$data)
      
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->title }}</td>
      <td>{!! $data->description !!}</td>
      <td>{{ $data->short_description }}</td>
      <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->image) }}" class="rounded" style="width: 60px; height:60px" alt="img">
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
      <span><a class="btn btn-outline-success btn-xs" href="{{url('softcategory_active',$data->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
      <!-- <span style="color:green">Active</span> -->
      @else
      <span><a class="btn btn-outline-danger btn-xs" href="{{url('softcategory_unactive',$data->id)}}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
      <!-- <span style="color:red">UnActive</span> -->
      @endif
      </td>

      <td>
        <a href="{{ route('sub_category_product',$data->id) }}" class="btn  btn-outline-primary mb-1"><i class="bi bi-diagram-3 "></i>
        </a>
        <a href="{{ route('category_delete',$data->id) }}" class="btn btn-outline-danger mb-1"><i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
        <a href="{{ route('category_update',$data->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil-square" aria-hidden="true"></i>
          </a>
      </td>
    </tr>
    @endforeach

   
  </tbody>


</table>
</div> 


@endsection