@extends('admin.layout.app')
@section('content')
   
<div class="container "> 
    <!-- create modal with a button -->
    
    <div class="row mt-5">
  <div class="col-md-8 mb-2">
  <button  type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#myModal">Create New Slider Pictuure</button>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search" value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('slider') }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
        </div> 
      </form>
    </div>
  </div>
</div>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create New Slider Picture</h4>
                        <button type="button" class="close pe-5 " style="color: red" data-dismiss="modal">&times;</button>

          </div>
          <div class="modal-body">
            
<div class="container">
    <form action="{{ route('slider_post') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control"  placeholder="Enter Name" name="name">
      </div>

      <div class="form-group">
        <label for="email">Description:</label>
        <textarea name="description" class="form-control"  placeholder="Enter Description"></textarea>
      </div>
      
      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image">
      </div>
      {{-- <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div> --}}
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    


    {{-- update modal --}}

  
    <!-- Modal -->
    <div class="modal fade" id="update" role="dialog">
      <div class="modal-dialog">
       
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit New Slider Picture</h4>
                        <button type="button" class="close pe-5 " style="color: red" data-dismiss="modal">&times;</button>

          </div>
          <div class="modal-body">
            
<div class="container">
    <form action="{{ route('slider_update_post') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" id="id">

      <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control"  placeholder="Enter Name" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="email">Description:</label>
        <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
      </div>
      
      <div class="form-group">
        <label for="image">Image:</label>
        <div id="img" ></div>
        <input type="file" class="form-control" name="image" id="image">
            </div>
      {{-- <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div> --}}
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    



    <table class="table table-default table-secondary">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Status ON/OFF</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($read_cr as $key=>$data)
        
      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td>{{ $data->name }}</td>
        <td>{{ $data->description }}</td>
        <td>
          <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->image) }}" class="rounded" alt="img">
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
      <span><a class="btn btn-outline-success btn-xs" href="{{route('softslider_active',$data->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
      <!-- <span style="color:green">Active</span> -->
      @else
      <span><a class="btn btn-outline-danger btn-xs" href="{{route('softslider_unactive',$data->id)}}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
      <!-- <span style="color:red">UnActive</span> -->
      @endif
      </td>
        <td>
        <a  onclick="slider_update({{ $data }})" class="btn btn-outline-success" data-toggle="modal" data-target="#update"><i class="fa fa-pencil-square" aria-hidden="true"></i>
        </a>
          <a href="{{ route('slider_delete',$data->id) }}" class="btn btn-outline-danger mb-2"><i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
          
        </td>
      </tr>
      @endforeach

     
    </tbody>


  </table>
  </div>
  
@endsection





<script>

 
function slider_update(dr) {
  // Set the value of the hidden id field
  $('#id').val(dr.id);

  // Set the value of the name input field
  $('#name').val(dr.name);

  $('#description').val(dr.description);

  // Dynamically update the image by constructing the correct image path
  $('#img').html('<img src="https://choudharytravels.in/public/img/' + dr.image + '" width="300px" class="rounded" >');

  // Hide the image and fade it in slowly
  $('#img').hide().fadeIn('slow');
}

  </script>

