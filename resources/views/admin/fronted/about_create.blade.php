@extends('admin.layout.app')    
 <!-- <div class="col header-top-left">
  <div class="header-top-call">
      <i class="fa fa-envelope"></i> Mail:
      <a href="mailto:info@yescaremarketing.com"> info@yescaremarketing.com</a>
  </div>
</div> -->
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
      <h4 class="card-title">About form </h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('about_create_post') }}" method="POST" enctype="multipart/form-data"  onsubmit="return submitForm()">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Title Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title_name">
        </div>
      
          <div class="form-group"> 
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        

        <div class="form-group">
          <label>Multiple Images</label>
          <input type="file" name="multiple_image[]" multiple class="form-control">
        </div>
        
        {{-- <div class="form-group">
          <label for="exampleInputCity1">City</label>
          <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
        </div> --}}
        <div class="form-group">
          <label for="exampleTextarea1">Description</label>
          <textarea class="form-control" name="description" placeholder="Description.."  rows="4"></textarea>
        </div>
        <!-- <div class="form-group">
          <label for="exampleTextarea1">Description 2</label>
          <textarea class="form-control" name="description2"  rows="4"></textarea>
        </div> -->
        <div class="form-group">
            <label>Description2</label>
            <div class="toolbar">
                <button type="button" class="btn btn-icon" onclick="formatText('bold')" title="Bold"><b>B</b></button>
                <button type="button" class="btn btn-icon" onclick="formatText('italic')" title="Italic"><i>I</i></button>
                <button type="button" class="btn btn-icon" onclick="formatText('underline')" title="Underline"><u>U</u></button>
                <button type="button" class="btn btn-icon" onclick="formatText('insertOrderedList')" title="Ordered List">OL</button>
                <button type="button" class="btn btn-icon" onclick="formatText('insertUnorderedList')" title="Unordered List">UL</button>
            </div>

        <div class="description-editor form-control" contenteditable="true" name="description2" id="descriptionEditor">
            Write your description here...
        </div>

        <!-- Hidden input field to store the formatted description -->
        <input type="hidden" id="descriptionInput" name="description2">
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
            <label for="exampleInputEmail3">Short Description</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="short_description" placeholder="Short Description..">
          </div>
     
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <!-- <button class="btn btn-light">Cancel</button> -->
      </form>
    </div>
  </div>
</div>

@endsection

