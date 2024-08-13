@extends('layout.layout')
@section('content')

<div class="w-75 mx-auto">

  <button class="btn btn-info">
    <a href="{{url('/contacts/create')}}">Create New Contact</a>
  </button>

  <h3 class="text-center">All Contact</h3>

  <table class="table table-dark table-striped table-hover">
    <thead>
      <tr class="text-center">
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      <!-- All Contact Data Show  -->
      @foreach ( $allContacts as $contact)

      <tr>
        <th scope="row">1</th>
        <td>{{$contact -> name}}</td>
        <td>{{$contact -> email}}</td>
        <td>{{$contact -> phone}}</td>

        <td class="text-center">
          <a class="btn btn-sm btn-info" href="{{url('/contacts/show')}}">View</a>
          <a class="btn btn-sm btn-warning" href="{{url('/contacts/{id}/edit')}}">Update</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>

@endsection