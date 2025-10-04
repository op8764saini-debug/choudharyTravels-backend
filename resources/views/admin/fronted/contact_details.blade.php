@extends('admin.layout.app')
@section('content')

@if(session('success_delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('success_delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="main-panel">
<div class="container pt-5">

<div class="row mt-5">
  <div class="col-md-8 mb-2">
  <!-- <button  type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#myModal">Create New Slider Pictuure</button> -->
   <h4>Contact Details</h4>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search" value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('contact_details') }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
        </div> 
      </form>
    </div>
  </div>
</div>

<table class="table table-default table-secondary" >
    <thead>
    <tr> 
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 <tbody>
    @foreach ($con_details as $key=>$data)
      
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->name }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->subject }}</td>
      <td>{{ $data->message }}</td>

      <td>
        <a href="{{ route('contact_details_delete',$data->id) }}" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
       
      </td>
    </tr> 
    @endforeach

   
  </tbody> 


</table>
<!-- Pagination Links -->
<div class="d-flex right mb-5 mt-5">

    {{ $con_details->links('pagination::bootstrap-5') }}
</div>
</div>

<style>
  .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #9c405a;
    border-color: #9c405a;
}

.page-link {
  color: #9c405a;
}
</style>

@endsection