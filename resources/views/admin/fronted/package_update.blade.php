@extends('admin.layout.app')
@section('content')
<div class="main-panel">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Package Update form </h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('package_update_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $update->id }}">

        <div class="form-group">
          <label for="exampleInputName1">Vehicle Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="car_name" placeholder="Enter Name" value="{{ $update->car_name }}">
        </div>
      
          <div class="form-group">
            <img src="{{ asset('https://choudharytravels.in/public/img/'. $update->image) }}" width="100px" alt="" class="rounded">
            <input type="file" name="image" class="form-control">
        </div>
        
        
        {{-- <div class="form-group">
          <label for="exampleInputCity1">City</label>
          <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
        </div> --}}
        <div class="form-group">
          <label for="exampleTextarea1">Description</label>
          <textarea class="form-control" name="description"  rows="4">{{ $update->description}}</textarea>
        </div>
    
     
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{route('admin_package')}}" class="btn btn-light">Cancel</a>
      </form>
    </div>
  </div>

@endsection

