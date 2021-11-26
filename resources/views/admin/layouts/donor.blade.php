@extends('admin.index')

@section('content')


<h1 class="mt-4">Donor list</h1>
<!-- <table class="table table-dark table-striped"> -->
<table class="table table-success table-striped">
                        <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Blood_group</th>
      <th scope="col">Gender</th>
      <th scope="col">Organ_wants_to_donate</th>
      <th scope="col">Details</th>

    </tr>
  </thead>
  <tbody>
  @foreach($donors as $donor)
  <tr>
      <th>{{$donor->Name}}</th>
      <td>{{$donor->Age}}</td>
      <td>{{$donor->Blood_group}}</td>
      <td>{{$donor->Gender}}</td>
      <td>{{$donor->Organ_wants_to_donate}}</td>
      <td>{{$donor->Details}}</td>
          
    </tr>
   @endforeach
    </tbody>
</table>
@endsection