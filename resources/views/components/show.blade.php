@extends('layout.layout')
@section('content')

<div class="mt-1 py-4 bg-secondary rounded-4">
  <div class="card border-success mb-3 mx-auto w-50">

    <button class="btn btn-info">
      <a href="{{url('/contacts')}}">All Contact</a>
    </button>

    <div class="card-header bg-transparent border-success text-success text-center fw-bolder fs-5">Single Contact Profile</div>

    <div class="card">
      <div class="card-body">
        <h2>Name: {{$singleUser -> name}}</h2>
        <p>Email: {{$singleUser -> email}}</p>
        <p>Phone Number: {{$singleUser -> phone}}</p>
        <p>Address: {{$singleUser -> address}}</p>
      </div>
    </div>

    <div class="d-flex justify-content-around">
      <a href="{{url('/contacts'.'/'.$singleUser -> id.'/edit')}}">
        <div class="card-footer bg-transparent border-success">Edit Now</div>
      </a>

      <!-- --------Delete Link Make---------  -->
      <form method="POST" action="{{route('contact.destroy',$singleUser -> id)}}">

        @csrf
        @method('delete')
        <button class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>

</div>



@endsection