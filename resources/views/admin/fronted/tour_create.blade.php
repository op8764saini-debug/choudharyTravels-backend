@extends('admin.layout.app')    
 <div class="col header-top-left">
  {{-- <div class="header-top-call">
      <i class="fa fa-envelope"></i> Mail:
      <a href="mailto:info@yescaremarketing.com"> info@yescaremarketing.com</a>
  </div> --}}
</div>
@section('content')
<div class="container p-5">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tour form </h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('tour_create_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">title Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title_name">
        </div>
      
          <div class="form-group"> 
            <label>image</label>
            <input type="file" name="image" class="file-upload-default" style="display:none;">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload btn btn-primary" type="button">Upload</button>
                </span>
            </div>
        </div>
        <script>
            document.querySelector('.file-upload').addEventListener('click', function() {
                document.querySelector('.file-upload-default').click();
            });
        
            document.querySelector('.file-upload-default').addEventListener('change', function() {
                let fileName = this.files[0].name;
                document.querySelector('.file-upload-info').value = fileName;
            });
        </script>
        
               <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>

@endsection

