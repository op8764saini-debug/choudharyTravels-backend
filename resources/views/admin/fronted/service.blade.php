@extends('admin.layout.app')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
<!-- <a href="{{ route('service_create') }}" class="btn btn-primary btn-lg m-5">Create New Serices</a> -->
<div class="row">
  <div class="col-md-8 mb-2">
    <a href="{{ route('service_create') }}" class="btn btn-primary btn-lg">Create New Package</a>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search"value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('admin_services') }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
        </div> 
      </form>
    </div>
  </div>
</div>

<table class="table-responsive table table-default table-secondary" >
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Travel Name</th>
      <!-- <th scope="col">Price</th> -->
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Short Description</th>
      <th scope="col">Banner Image</th>
      <th scope="col">Multiple Images</th>
      <th scope="col">Status</th>
      <th scope="col">Status ON/OFF</th>
      <th scope="col">Action</th>
    </tr> 
  </thead>
  <tbody>
    @foreach ($s_da as $key=>$data)
      
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->travel_name }}</td>
      <!-- <td>{{ $data->price }}</td> -->
      <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->image) }}" class="rounded" alt="img">
      </td>
      <td>{!! $data->description !!}</td>
      <td>{{ $data->short_description }}</td>
      <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->banner_image) }}" class="rounded" width="100%" alt="img">
      </td>
<style>
  .box-img{
    width: 165px;
    height: 150px;
    /* border: 2px solid white; */
    overflow: auto;
  }
</style>
     <td>
     <div class="box-img">

          @php
              $images = json_decode($data->multiple_image);
          @endphp

          @if(!empty($images))
              @foreach($images as $image)
                  <img src="{{ asset('https://choudharytravels.in/public/img/' . $image) }}" alt="Image" class="rounded" style="width: 60px; height:60px; margin: 5px;" >
              @endforeach
          @else
            No Images Available
          @endif
          </div>

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
      <span><a class="btn btn-outline-success btn-xs" href="{{url('softservice_active',$data->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
      <!-- <span style="color:green">Active</span> -->
      @else
      <span><a class="btn btn-outline-danger btn-xs" href="{{url('softservice_unactive',$data->id)}}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
      <!-- <span style="color:red">UnActive</span> -->
      @endif
      </td>

      <td>
        <a href="{{ route('service_delete',$data->id) }}" class="btn btn-outline-danger mb-2"><i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
        <a href="{{ route('service_update',$data->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil-square" aria-hidden="true"></i>
          </a>
      </td>
    </tr>
    @endforeach

   
  </tbody>


</table>
  </div>
@endsection 