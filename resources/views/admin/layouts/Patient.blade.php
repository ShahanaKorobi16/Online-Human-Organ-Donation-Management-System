@extends('admin.index')

@section('content')


<h1 class="mt-4">Patient list</h1>
<!-- 
<table class="table table-dark table-striped"> -->
<table class="table table-success table-striped">
                        <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Gender</th>
      <th scope="col">Organ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mina</td>
      <td>27</td>
      <td>A+</td>
      <td>Female</td>
      <td>Cornea</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Sajid</td>
      <td>34</td>
      <td>AB+</td>
      <td>Male</td>
      <td>kindey</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kona</td>
      <td>24</td>
      <td>A-</td>
      <td>Female</td>
      <td>Liver</td>
    </tr>
    </tbody>
</table>
@endsection