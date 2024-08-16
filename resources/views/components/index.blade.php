@extends('layout.layout')
@section('content')

<div class="mt-1 py-4 bg-secondary rounded-4">


  <!-- Back index page Button -->
  <h4 class="text-center border w-50 bg-info-subtle rounded-4 p-2 mx-auto">All Contact</h4>

  <!--Add new contact and All Searching system add  -->
  <div class="w-75 p-2 mx-auto">
    <div class="d-flex  mt-2 py-3 justify-content-between  align-items-center">
      <!-- Create New Contact Button -->
      <button class="btn btn-info  font-weight-bold">
        <a class="text-decoration-none text-white fs-6 fw-bold" href="{{url('/contacts/create')}}">Create New Contact</a>
      </button>

      <!-- search by name and email  -->
      <div class="">
        <form class="d-flex flex-row d-inline-flex" action="{{url('contacts/contact_search') }}" method="GET">

          <div class="input-group">
            <input class="form-control p-2" type="text" name="searchdata" placeholder="Search Now">
            <button class="input-group-text" type="submit">Search</button>
          </div>

        </form>

      </div>

      <!-- Sorting by name and date  -->
      <x-sorting :status="request()->get('status')" />
 
    </div>
  </div>

<!-- Show All Data to Database -->
  <table class="table table-dark table-striped table-hover w-75 mx-auto">
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
      <?php $i = 1; ?>
      @foreach ( $allContacts as $contact)

      <tr>
        <th scope="row"><?php echo $i;
                        $i++; ?></th>
        <td>{{$contact -> name}}</td>
        <td>{{$contact -> email}}</td>
        <td>{{$contact -> phone}}</td>

        <td class="text-center">
          <a class="btn btn-sm btn-info p-2" href="{{url('/contacts', $contact -> id)}}">View</a>
          <a class="btn btn-sm btn-warning p-2" href="{{url('/contacts'.'/'.$contact -> id.'/edit')}}">Update</a>

          <!-- --------Delete Link Make---------  -->
          <form class="d-flex d-inline-flex" method="POST" action="{{route('contact.destroy',$contact -> id)}}">

            @csrf
            @method('delete')
            <button class="btn btn-danger">Delete</button>
          </form>



        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

  <!-- Filter Name and Data. Use to select option -->
  <script>
    function filterStatus() {
      let contact = document.getElementById('taskStatus').value;
      if (contact == 'all') {
        location.href = "{{'/contacts'}}";
      } else {
        location.href = "/contacts?data_filter=" + allContacts;
      }
    }
  </script>


</div>

@endsection