@extends('admin.layout.app')
@section('content')
<!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->

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
  <h4>Tour Deals</h4>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <form action="">
        <div class="input-group">
          <input type="search" class="form-control" name="search" value="{{$search}}" placeholder="Search any Records..." aria-label="Search any Records">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="submit">Search</button>
            </div>&nbsp;
            <a href="{{ route('tour_deals') }}" class="btn btn-warning btn-icon-text"><i class="mdi mdi-reload btn-icon-prepend"></i>Reset</a>
        </div> 
      </form>
    </div>
  </div>
</div>
<table class="table-responsive table table-default table-secondary" >
    <thead>
    <tr> 
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">date & time</th>
      <th scope="col">Mobile</th>
      <th scope="col">Persons</th>
      <th scope="col">Categories</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 <tbody>
    @foreach ($tr_deals as $key=>$data)
      
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->name }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->datetime }}</td>
      <td>{{ $data->mobile }}</td>
      <td>{{ $data->persons }}</td>
      <td>{{ $data->categories }}</td>
      <td>{{ $data->description }}</td>

      <td>
        <a href="{{ route('tour_deals_delete',$data->id) }}" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
       
      </td>
    </tr> 
    @endforeach

   
  </tbody> 


</table>
<!-- Pagination Links -->
<div class="d-flex right mb-5 mt-5">

    {{ $tr_deals->links('pagination::bootstrap-5') }}
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