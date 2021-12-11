@extends('admin.master')


@section('content')

<h1>Employee list</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Date_of_birth</th>
      <th scope="col">Weight</th>
      <th scope="col">Blood_group</th>
      <th scope="col">Gender</th>
      <th scope="col">Organ_Needed</th>
      <th scope="col">Details</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th>{{$user->Username}}</th>
                <td>{{$user->Email}}</td>
                <td>{{$user->Date_of_birth}}</td>
                <td>{{$user->Weight}}</td>
                <td>{{$user->Blood_group}}</td>
                <td>{{$user->Gender}}</td>
                <td>{{$user->Organ_Needed}}</td>
                <td>{{$user->Details}}</td>
                <td>{{$user->Contact}}</td>
                <td>{{$user->Address}}</td>
            </tr>
        @endforeach
    
    
    </tbody>
</table>





@endsection