@extends('admin.layout.app')
@section('content')
<div class="main-panel">
<div class="content-wrapper">

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>







<!-- <a href="{{ route('sub_category_create', ['id' => request()->id]) }}" class="btn btn-primary btn-lg m-5">
    Create New Sub Sub Category
</a> -->

<div class="row">
  <div class="col-md-8 mb-2">
  <a href="{{ route('admin_category') }}" class="btn btn-primary btn-lg"> < < Go Back</a>&nbsp;
    <a href="{{ route('sub_category_create', ['id' => request()->id]) }}" class="btn btn-primary btn-lg">Create New Sub Sub Category</a>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search" value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('sub_category_product', ['id' => request()->id]) }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
        </div> 
      </form>
    </div>
  </div>
</div>

<table class="table-responsive table table-default table-secondary" >
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Short Description</th> 
      <th scope="col">Image</th> 
      <th scope="col">Banner Image</th>
      <th scope="col">Multiple Image</th>
      <th scope="col">Status</th>
      <th scope="col">Status ON/OFF</th>
      <th scope="col">Action</th>
    </tr> 
  </thead>
 <tbody>
    @foreach ($subcategory as $key=>$data)
      
    <tr>
      <th scope="row">{{ $data->id }}</th>
      
          <td>{{ $data->parent ? $data->parent->title : 'No Title' }}</td>
          
      <td>{{ $data->title }}</td>
      <td>{!! substr(strip_tags($data->description), 0, 500) . (strlen(strip_tags($data->description)) > 20 ? '......' : '') !!}</td>

      <td>{{ $data->short_description }}</td>
      <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->image) }}" class="rounded" style="width: 60px; height:60px" alt="img">
      </td>
      <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->banner_image) }}" class="rounded" style="width: 60px; height:60px" alt="img">
      </td>

      <style>
  .box-img{
    width: 165px;
    height: 150px;
    /* border: 2px solid white; */
    overflow: auto;
  }
</style>
     <td>
     <div class="box-img">

          @php
              $images = json_decode($data->multiple_image);
          @endphp

          @if(!empty($images))
              @foreach($images as $image)
                  <img src="{{ asset('https://choudharytravels.in/public/images/' . $image) }}" alt="Image" class="rounded" style="width: 60px; height:60px; margin: 5px;" >
              @endforeach
          @else
            No Images Available
          @endif
          </div>

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
      <span><a class="btn btn-outline-success btn-xs" href="{{url('softsubcategory_active',$data->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
      <!-- <span style="color:green">Active</span> -->
      @else
      <span><a class="btn btn-outline-danger btn-xs" href="{{url('softsubcategory_unactive',$data->id)}}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
      <!-- <span style="color:red">UnActive</span> -->
      @endif
      </td>
      <td>
        <a href="{{ route('sub_category_product_delete',$data->id) }}" class="btn btn-outline-danger mb-2"><i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
        <a  href="{{ route('sub_category_update',$data->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil-square" aria-hidden="true"></i>
          </a>
      </td>
    </tr>
    @endforeach

    
  </tbody> 


</table>
</div>



@endsection