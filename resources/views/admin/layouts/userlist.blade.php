@extends('admin.index')


@section('content')

<h1 class="mt-4">User list</h1>


<table class="table table-success table-striped">
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
                <th>{{$user->username}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->date_of_birth}}</td>
                <td>{{$user->weight}}</td>
                <td>{{$user->blood_group}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->organ_Needed}}</td>
                <td>{{$user->details}}</td>
                <td>{{$user->contact}}</td>
                <td>{{$user->address}}</td>
            </tr>
        @endforeach
    
    
    </tbody>
</table>





@endsection