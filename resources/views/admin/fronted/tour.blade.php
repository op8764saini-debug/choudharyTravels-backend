@extends('admin.layout.app')
@section('content')



<div class="content-wrapper">


    @if(session('success_form'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success_form') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<a href="{{ route('tour_create') }}" class="btn btn-primary btn-lg m-5">Create New Tour Section</a>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('success_delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('success_delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<table class="table table-default table-secondary" >
    <thead>
    <tr> 
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 <tbody>
    @foreach ($tr_data as $key=>$data)
      
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->title }}</td>

      <td>
        <img src="{{ asset('https://choudharytravels.in/public/img/' . $data->image) }}" class="rounded" alt="img">
      </td>
      <td>
        <a href="{{ route('tour_delete',$data->id) }}" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>
          <a href="{{ route('tour_update',$data->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil-square" aria-hidden="true"></i>
          </a>
      </td>
    </tr> 
    @endforeach

   
  </tbody> 


</table>
<div class="content-wrapper">


@endsection