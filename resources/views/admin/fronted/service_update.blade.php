@extends('admin.layout.app')
@section('content')


<style>
        body {
            background-color: #f8f9fa;
            font-family: 'Open Sans', sans-serif;
        }

        .description-wrapper {
            margin-top: 50px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .toolbar {
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-bottom: none;
            padding: 10px;
            display: flex;
            justify-content: flex-start;
            gap: 10px;
            border-radius: 5px 5px 0 0;
        }

        .toolbar button {
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .toolbar button:hover {
            background-color: #e9ecef;
        }

        .description-editor {
            border: 1px solid #ccc;
            border-radius: 0 0 5px 5px;
            padding: 15px;
            min-height: 250px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }

        .description-editor:focus {
            outline: none;
            border-color: #007bff;
        }

        /* Custom button icons */
        .btn-icon {
            width: 25px;
            height: 25px;
            display: inline-block;
            text-align: center;
        }

        /* Active buttons state */
        .toolbar button.active {
            background-color: #007bff;
            color: white;
        }
    </style>

<div class="container p-5">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Service Update form </h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('service_update_post') }}" method="POST" enctype="multipart/form-data" onsubmit="return submitForm()">
        @csrf
        <input type="hidden" name="id" value="{{ $update->id }}"> 

        <div class="form-group">
          <label for="exampleInputName1">Travel Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="travel_name" placeholder="Name" value="{{ $update->travel_name }}">
        </div>
        <!-- <div class="form-group">
          <label for="exampleInputEmail3">Price</label>
          <input type="text" class="form-control" id="exampleInputEmail3" name="price" placeholder="Price" value="{{ $update->price }}">
        </div> -->
       
          <div class="form-group">

            <img src="{{ asset('https://choudharytravels.in/public/img/' . $update->image) }}" alt="img" width="100px">

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

@php
    $images = json_decode($update->multiple_image); // JSON इमेजेस को डिकोड करें
@endphp

@if (!empty($images))
    @foreach ($images as $key => $image)
        <div class="form-group" style="position: relative; display: inline-block; margin: 5px;">
            <!-- इमेज दिखाएं -->
            <img src="{{ asset('https://choudharytravels.in/public/img/' . $image) }}" alt="Image" width="60px" height="60px" class="rounded" style="border: 1px solid #ccc;">

            <!-- डिलीट लिंक -->
            <a href="{{ route('deleteservice-image', ['id' => $update->id, 'key' => $key]) }}" 
               style="position: absolute; top: -15px; right: -10px; background-color: #ccc; color: #000; border: none; border-radius: 50%; padding: 0px 8px; text-decoration: none;">
                &times;
            </a>
        </div>
    @endforeach
@else
    <p>No Images Available!</p>
@endif


        <div class="form-group">
          <label>Multiple Images</label>
          <input type="file" name="multiple_image[]" multiple class="form-control" value="{{ $update->multiple_image }}" onsubmit="return submitForm()">
        </div>
          

          <div class="form-group">
            <label>Description</label>
            <div class="toolbar">
                <button type="button" class="btn btn-icon" onclick="formatText('bold')" title="Bold"><b>B</b></button>
                <button type="button" class="btn btn-icon" onclick="formatText('italic')" title="Italic"><i>I</i></button>
                <button type="button" class="btn btn-icon" onclick="formatText('underline')" title="Underline"><u>U</u></button>
                <button type="button" class="btn btn-icon" onclick="formatText('insertOrderedList')" title="Ordered List">OL</button>
                <button type="button" class="btn btn-icon" onclick="formatText('insertUnorderedList')" title="Unordered List">UL</button>
            </div>

        <div class="description-editor" contenteditable="true" id="descriptionEditor">
            {!! $update->description !!}
        </div>

        <!-- Hidden input field to store the formatted description -->
        <input type="hidden" id="descriptionInput" name="description">
        </div>
        <script>
            function formatText(command) {
                document.execCommand(command, false, null);
            }
        
            function submitForm() {
                // Get the content of the description editor
                const editorContent = document.getElementById('descriptionEditor').innerHTML;
        
                // Set the hidden input value to the editor's content
                document.getElementById('descriptionInput').value = editorContent;
        
                return true; // Allow form submission
            }
        </script>

          <div class="form-group">
            <label for="exampleTextarea1">Short Description</label>
            <textarea class="form-control" name="short_description" id="exampleTextarea1" rows="4">{{ $update->short_description }}</textarea>
          </div>
  
          <div class="form-group">
            <img src="{{ asset('https://choudharytravels.in/public/img/' . $update->banner_image) }}" alt="img" width="100px">
            <input type="file" name="banner_image" class="form-control">
            <!-- <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-infos" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-uploads btn btn-primary" type="button">Upload</button>
                </span>
            </div> -->
        </div>
        <!-- <script>
          document.querySelector('.file-uploads').addEventListener('click', function() {
              document.querySelector('.file-upload-defaults').click();
          });
      
          document.querySelector('.file-upload-defaults').addEventListener('change', function() {
              let fileName = this.files[0].name;
              document.querySelector('.file-upload-infos').value = fileName;
          }); 
      </script> -->
        <button type="submit" class="btn btn-primary mr-2" name="update">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>

@endsection

