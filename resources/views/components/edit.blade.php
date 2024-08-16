@extends('layout.layout')
@section('content')

<div class="mt-1 py-4 bg-secondary rounded-4">

<!-- Make Card -->
    <div class="card border-success mb-3 mx-auto w-50">

<!-- Back index page Button -->
        <button class="btn btn-info w-25">
            <a class="text-decoration-none text-white fs-6 fw-bold" href="{{url('/contacts')}}">Back All Contact</a>
        </button>
        <!-- Successfully Message Show  -->

        <!-- <div>
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session() -> get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif
        </div> -->
        <!-- Successfully Message Show End  -->

        <!-- All Data show and Update Data -->
        <div class="card-header bg-transparent border-success text-success text-center fw-bolder fs-5">Update Contact</div>
        <div class="card-body text-success">
            <!-- From Start   -->
            <form class="row g-3" action="{{url('contacts', $updateData -> id)}}" method="POST">
                <!-- Cross-Site Request Forgery (CSRF) -->
                @csrf

                <div class="col-md-6">
                    <label for="userName" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="userName" placeholder="Name" value="{{$updateData -> name}}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" id="inputEmail4" placeholder="Email" value="{{$updateData -> email}}">
                </div>
                <div class="col-md-12">
                    <label for="inputPhone" class="form-label">Phone</label>
                    <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="Phone Number" value="{{$updateData -> phone}}">
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" type="textarea" class="form-control" id="address" placeholder="Contact Person Address">{{$updateData -> address}}</textarea>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-50">Update Now</button>
                </div>
            </form>

        </div>

    </div>
</div>

@endsection