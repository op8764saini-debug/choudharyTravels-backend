@extends('admin.layout.app')
@section('content')
<div class="main-panel">
<div class="content-wrapper">
 <div class="row">
  <div class="col-md-8">
    <a href="{{ route('about_create') }}" class="btn btn-primary btn-lg">Create New About</a>
  </div>
  <div class="col-md-4 mb-2">
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search"value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('admin_about') }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
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
      <th scope="col">Description2</th> 
      <th scope="col">Short_Description</th>
      <th scope="col">Image</th>
      <th scope="col">Multiple Image</th>
      <th scope="col">Status</th>
      <th scope="col">Status ON/OFF</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @if(!empty($ab_data))
  <tbody>
    
    @foreach ($ab_data as $key=>$data)
      
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->title }}</td>
      <td>{{ $data->description }}</td>
      <td>{!! $data->description2 !!}</td>
      <td>{{ $data->short_description }}</td>
      <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->image) }}" class="rounded" alt="img">
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
      <span><a class="btn btn-outline-success btn-xs" href="{{url('softabout_active',$data->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
      <!-- <span style="color:green">Active</span> -->
      @else
      <span><a class="btn btn-outline-danger btn-xs" href="{{url('softabout_unactive',$data->id)}}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
      <!-- <span style="color:red">UnActive</span> -->
      @endif
      </td>
      <td>
        <a href="{{ route('about_delete',$data->id) }}" class="btn btn-outline-danger mb-2"><i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
          <a href="{{ route('about_update',$data->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil-square" aria-hidden="true"></i>
          </a>
      </td>
    </tr> 
    @endforeach

   
  </tbody>
  @else
  No Data Available
  @endif

</table>
</div>

@endsection