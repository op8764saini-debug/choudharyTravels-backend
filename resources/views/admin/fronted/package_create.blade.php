@extends('admin.layout.app')
@section('content')

<div class="main-panel">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Package form </h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('package_create_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name">
        </div>
      
          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        
        
        {{-- <div class="form-group">
          <label for="exampleInputCity1">City</label>
          <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
        </div> --}}
        <div class="form-group">
          <label for="exampleTextarea1">Description</label>
          <textarea class="form-control" name="description" placeholder="Description Here..." rows="4"></textarea>
        </div>
    
     
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{route('admin_package')}}" class="btn btn-light">Cancel</a>
      </form>
    </div>
  </div>

@endsection

