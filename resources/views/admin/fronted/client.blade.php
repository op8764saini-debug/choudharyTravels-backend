@extends('admin.layout.app')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        
<!-- <a href="{{ route('client_create') }}" class="btn btn-primary btn-lg m-5">Create New Client Section</a> -->
<div class="row">
  <div class="col-md-8 mb-2">
    <a href="{{ route('client_create') }}" class="btn btn-primary btn-lg">Create New Client Section</a>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search" value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('client') }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
        </div> 
      </form>
    </div>
  </div>
</div>

<table class="table table-default table-secondary" >
    <thead>
    <tr> 
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Designation</th>
      <th scope="col">Description</th> 
      <th scope="col">Status</th>
      <th scope="col">Status ON/OFF</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($c_read as $key=> $cd )

   <tr>

     <th scope="row">{{ $cd->id }}</th>
     <td>{{ $cd->name }}</td>
     <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $cd->image) }}" alt="img">
     </td>
     <td>{{ $cd->designation }}</td>
     <td>{{ $cd->description }}</td>
     
     <td>
      @if($cd->status == 1)
      <label class="badge badge-success">Published</label>
      @else
      <label class="badge badge-danger">UnPublished</label>
      @endif
      </td>
     
     <td>
      @if($cd->status == 1)
      <span><a class="btn btn-outline-success btn-xs" href="{{url('softclient_active',$cd->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
      <!-- <span style="color:green">Active</span> -->
      @else
      <span><a class="btn btn-outline-danger btn-xs" href="{{url('softclient_unactive',$cd->id)}}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
      <!-- <span style="color:red">UnActive</span> -->
      @endif
      </td>
     <td>
            <a href="{{ route('client_delete',$cd->id) }}" class="btn btn-outline-danger mb-2"><i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
            <a href="{{ route('client_update',$cd->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil-square" aria-hidden="true"></i>
            </a>
     </td>
    </tr>

     @endforeach


   
  </tbody>


</table>

        </div>
    
@endsection