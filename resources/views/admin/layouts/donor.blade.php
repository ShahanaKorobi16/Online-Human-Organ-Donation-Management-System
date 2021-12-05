@extends('admin.index')

@section('content')


<h1 class="mt-4">Donor list</h1>
<!-- <table class="table table-dark table-striped"> -->
<table class="table table-success table-striped">
                        <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Date_of_birth</th>
      <th scope="col">Weight</th>
      <th scope="col">Blood_group</th>
      <th scope="col">Gender</th>
      <th scope="col">Organ_wants_to_donate</th>
      <th scope="col">Details</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
     

    </tr>
  </thead>
  <tbody>
  @foreach($donors as $donor)
  <tr>
      <th>{{$donor->Name}}</th>
      <td>{{$donor->Date_of_birth}}</td>
      <td>{{$donor->Weight}}</td>
      <td>{{$donor->Blood_group}}</td>
      <td>{{$donor->Gender}}</td>
      <td>{{$donor->Organ_wants_to_donate}}</td>
      <td>{{$donor->Details}}</td>
      <td>{{$donor->Contact}}</td>
      <td>{{$donor->Email}}</td>
      <td>{{$donor->Address}}</td>
          
    </tr>
   @endforeach
    </tbody>
</table>
@endsection