@extends('layout.layout')
@section('content')

<div class="mt-1 py-4 bg-secondary rounded-4">
  <div class="card border-success mb-3 mx-auto w-50">

    <button class="btn btn-info w-25">
      <a class="text-decoration-none text-white fs-6 fw-bold" href="{{url('/contacts')}}">Back All Contact</a>
    </button>
    
    <div class="card-header bg-transparent border-success text-success text-center fw-bolder fs-5">Single Contact Profile</div>

    <div class="card mx-auto w-75 my-4">
      <div class="card-body">
        <h3 class="text-center mb-3 bg-dark text-white py-2 rounded-4 fw-bolder">{{$singleUser -> name}}</h3>
        <p><span class="fw-bolder">Email:</span> {{$singleUser -> email}}</p>
        <p><span class="fw-bolder">Phone Number: </span>{{$singleUser -> phone}}</p>
        <p><span class="fw-bolder">Address:</span> {{$singleUser -> address}}</p>
      </div>
    </div>

    <div class="mx-auto btn btn-warning w-25 mb-4">
      <a class="text-decoration-none text-white  fw-bold" href="{{url('/contacts'.'/'.$singleUser -> id.'/edit')}}">Edit Now
        <!-- <div class="card-footer bg-transparent ">Edit Now</div> -->
      </a>

      <!-- --------Delete Link Make--------- 
      <form method="POST" action="{{route('contact.destroy',$singleUser -> id)}}">

        @csrf
        @method('delete')
        <button class="btn btn-danger">Delete</button>
      </form> -->
    </div>
  </div>

</div>



@endsection