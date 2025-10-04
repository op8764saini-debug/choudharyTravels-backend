@extends('admin.layout.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>



<div class="main-panel">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Blog Update form </h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('blog_update_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $update->id }}">

        <div class="form-group">
          <label for="exampleInputName1">title Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title_name" value="{{ $update->title }}">
        </div>
      
          <div class="form-group">
            <img src="{{ asset('https://choudharytravels.in/public/img/'. $update->image) }}" class="rounded" alt="" width="200px">
            <input type="file" name="image" class="form-control">
            <!-- <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload btn btn-primary" type="button">Upload</button>
                </span>
            </div> -->
        </div>
        <!-- <script>
            document.querySelector('.file-upload').addEventListener('click', function() {
                document.querySelector('.file-upload-default').click();
            });
        
            document.querySelector('.file-upload-default').addEventListener('change', function() {
                let fileName = this.files[0].name;
                document.querySelector('.file-upload-info').value = fileName;
            });
        </script> -->
        
        {{-- <div class="form-group">
          <label for="exampleInputCity1">City</label>
          <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
        </div> --}}
        <div class="form-group">
          <label for="exampleTextarea1">Description</label>
          <textarea class="form-control" name="description"  rows="4">{{ $update->description }}</textarea>
        </div>
        <div class="form-group">
          <label for="date-picker">Choose a date:</label>
          <input type="text" class="form-control" name="date" id="custom-date-picker" value="{{ $update->date }}">

              </div>
        <script>
          flatpickr("#custom-date-picker", {
              dateFormat: "Y-m-d"
          });
      </script>    
     
    
      
     
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <!-- <button class="btn btn-light">Cancel</button> -->
      </form>
    </div>
  </div>

@endsection

