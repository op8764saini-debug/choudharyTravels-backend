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

<div class="main-panel">
<div class="content-wrapper">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Sub Category Update form </h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('sub_category_product_update_post') }}" method="POST" enctype="multipart/form-data" onsubmit="return submitForm()">
          @csrf
          <input type="hidden" name="id"  value="{{ $subcat->id }}">
          <input type="hidden" name="parent_id" value="{{ $subcat->parent_id }}">
          

  
          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control"  name="title" placeholder="Title" value="{{ $subcat->title }}">
          </div>

          <div class="form-group">
          <img src="{{ 'https://choudharytravels.in/public/img/' . $subcat->image }}" width="100px" class="rounded" alt=" Image"><br>
              <label>Image</label>
              <input type="file" name="image" multiple id="image" class="form-control">
          </div>

             
          <!-- <div class="form-group">
            <div id="imgeer"></div>
            <label>Image</label><br>
            <img src="{{ 'https://choudharytravels.in/public/img/' . $subcat->image }}" width="150px" alt="Banner Image"><br>

            <input type="file" name="image" id="image">
          </div> -->
         
          <!-- <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{ $subcat->description }}</textarea>
          </div> -->
          
          <div class="form-group">
          @php
              $images = json_decode($subcat->multiple_image);
          @endphp

          @if(!empty($images))
          @foreach ($images as $key => $image)
          <div class="form-group" style="position: relative; display: inline-block; margin: 5px;">
            <!-- इमेज दिखाएं -->
            <img src="{{ asset('https://choudharytravels.in/public/images/' . $image) }}" alt="Image" width="60px" height="60px" class="rounded" style="border: 1px solid #ccc;">

            <!-- डिलीट लिंक -->
            <a href="{{ route('delete.image', ['id' => $subcat->id, 'key' => $key]) }}" 
               style="position: absolute; top: -15px; right: -10px; background-color: #ccc; color: #000; border: none; border-radius: 50%; padding: 0px 8px; text-decoration: none;">
                &times;
            </a>
          </div>
          @endforeach
            <br>
          @else
            No Images Available <br><br>
          @endif
            <label>Multiple Images</label>
            <input type="file" name="multiple_image[]" class="form-control" multiple>
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

        <div class="description-editor" contenteditable="true" name="description" id="descriptionEditor">
          {!! $subcat->description !!}
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
            <textarea class="form-control" name="short_description" id="short_description"  rows="2">{{ $subcat->short_description }}</textarea>
          </div>

          <!-- <div class="form-group">
            <div id="imgeer2"></div>
            <label>Banner Image</label><br>
            <img src="{{ 'https://choudharytravels.in/public/img/' . $subcat->banner_image }}" width="150px" alt="Banner Image"><br>
            <input type="file" name="banner_image" id="banner_image">
          </div> -->

          <div class="form-group">
          <img src="{{ 'https://choudharytravels.in/public/img/' . $subcat->banner_image }}" width="100px" class="rounded" alt="Banner Image"><br>
            <label>Banner Image</label>
            <input type="file" name="banner_image" id="banner_image" class="form-control">
          </div>
        
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
          <!-- <a href="" class="btn btn-light">Cancel</a> -->
        </form>    
    </div>
  </div>
</div>
@endsection

