@extends('admin.index')

@section('content')


<h1 class="mt-4">Patient list</h1>

<!-- 
<table class="table table-dark table-striped"> -->
<table class="table table-success table-striped">
                        <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Blood_group</th>
      <th scope="col">Gender</th>
      <th scope="col">Case</th>
      <th scope="col">Organ_needed</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($patients as $patient)
    <tr>
      <th>{{$patient->Name}}</th>
      <td>{{$patient->Age}}</td>
      <td>{{$patient->Address}}</td>
      <td>{{$patient->Contact}}</td>
      <td>{{$patient->Email}}</td>
      <td>{{$patient->Blood_group}}</td>
      <td>{{$patient->Gender}}</td>
      <td>{{$patient->Case}}</td>
      <td>{{$patient->Organ_needed}}</td>
      <td><img src="{{url('/uploads/'.$patient->image)}}" width="100px" alt="patient image"></td>   
    </tr>
   @endforeach
     
    </tbody>
</table>
@endsection