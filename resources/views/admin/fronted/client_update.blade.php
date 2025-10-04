@extends('admin.layout.app')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Client Update form </h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('client_update_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
       
        <input type="hidden" name="id" value="{{ $upd->id }}">
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="name" value="{{ $upd->name }}"> 
        </div>
      
        <div class="form-group"> 
            <img src="{{ asset('https://choudharytravels.in/public/img/'. $upd->image) }}" alt="img" width="100px" class="rounded">
            <input type="file" name="image" class="form-control">
        </div>
        
        
        <div class="form-group">
          <label for="exampleInputCity1">Designation</label>
          <input type="text" class="form-control" name="designation" id="exampleInputCity1" value="{{ $upd->designation }}">
        </div>
        <div class="form-group">
          <label for="exampleTextarea1">Description</label>
          <textarea class="form-control" name="description"  rows="4">{{ $upd->description }}</textarea>
        </div>
       
     
        <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
        <a href="{{ route('client') }}"  class="btn btn-light">Cancel</a>
      </form>
    </div>
  </div>
  </div>
  
@endsection