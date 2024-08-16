@extends('layout.layout')
@section('content')


<div class="mt-1 py-4 bg-secondary rounded-4">

    <div class="card border-success mb-3 mx-auto w-50">
        <!-- Successfully Message Show  -->
        <!-- <div class="w-50 mx-auto">
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session() -> get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif
    </div> -->

        <!-- Successfully Message Show End  -->

        <!-- Back to All Contact page  -->
        <button class="btn btn-info w-25">
            <a class="text-decoration-none text-white fs-6 fw-bold" href="{{url('/contacts')}}">Back All Contact</a>
        </button>

        <div class="card-header bg-transparent border-success text-success text-center fw-bolder fs-5">Add New Contact</div>
        <div class="card-body text-success">
            <!-- From Start   -->
            <form class="row g-3" action="{{url('contacts') }}" method="POST">
                <!-- Cross-Site Request Forgery (CSRF) -->
                @csrf

                <div class="col-md-12">
                    <label for="userName" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="userName" placeholder="Name" value="{{old('name')}}">
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" id="inputEmail4" placeholder="Email" value="{{old('email')}}">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-md-12">
                    <label for="inputPhone" class="form-label">Phone</label>
                    <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="Phone Number" value="{{old('phone')}}">
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" type="textarea" class="form-control" id="address" placeholder="Contact Person Address"></textarea>
                </div>



                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-50 " data-bs-toggle="modal" data-bs-target="#exampleModal">Add Contact</button>
                </div>
            </form>



        </div>
        <!-- Modal -->


    </div>
</div>


@endsection