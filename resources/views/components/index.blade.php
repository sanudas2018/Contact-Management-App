@extends('layout.layout')
@section('content')

<div class="w-75 mx-auto">

  <button class="btn btn-info">
    <a href="{{url('/contacts/create')}}">Create New Contact</a>

  </button>

  <h3 class="text-center">All Contact</h3>
  <!-- search by name and email  -->
  <div>
    <form action="{{url('contacts/contact_search') }}" method="GET">
      <input type="text" name="searchdata" placeholder="Search">
      <button type="submit">Search</button>
    </form>
  </div>

  <!-- Sorting by name and date  -->

  <x-sorting :status="request()->get('status')" />


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
      <?php $i = 1; ?>
      @foreach ( $allContacts as $contact)

      <tr>
        <th scope="row"><?php echo $i;
                        $i++; ?></th>
        <td>{{$contact -> name}}</td>
        <td>{{$contact -> email}}</td>
        <td>{{$contact -> phone}}</td>

        <td class="text-center">
          <a class="btn btn-sm btn-info" href="{{url('/contacts', $contact -> id)}}">View</a>
          <a class="btn btn-sm btn-warning" href="{{url('/contacts'.'/'.$contact -> id.'/edit')}}">Update</a>

          <!-- --------Delete Link Make---------  -->
          <form method="POST" action="{{route('contact.destroy',$contact -> id)}}">

            @csrf
            @method('delete')
            <button class="btn btn-danger">Delete</button>
          </form>



        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

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