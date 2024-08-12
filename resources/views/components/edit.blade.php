
@extends('layout.layout')
@section('content')


<div class="card border-success mb-3 mx-auto w-50" >

<button class="btn btn-info">
    <a href="{{url('/contacts')}}">All Contact</a>
</button>

  <div class="card-header bg-transparent border-success text-success text-center fw-bolder fs-5">Update Contact</div>
  <div class="card-body text-success">
    <!-- From Start   -->
    <form class="row g-3" >
    <!-- Cross-Site Request Forgery (CSRF) -->
     @csrf

    <div class="col-md-12">
        <label for="userName" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="userName" placeholder="Name">
    </div>
    <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Email</label>
        <input name="email" type="text" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="col-md-12">
        <label for="inputPhone" class="form-label">Phone</label>
        <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="Phone Number">
    </div>
    <div class="col-md-12">
        <label for="address" class="form-label">Address</label>
        <textarea  name="address" type="textarea" class="form-control" id="address" placeholder="Contact Person Address"></textarea>
    </div>
   
    
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Updata Now</button>
    </div>
    </form>



  </div>
  <a href="#">
  <div class="card-footer bg-transparent border-success">Login Now</div>
  </a>
</div>


    
@endsection
    
