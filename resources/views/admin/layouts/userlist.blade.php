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
     
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
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
              
                <td>{{$user->contact}}</td>
                <td>{{$user->address}}</td>
                <td> 
                    <a class="btn btn-primary" href="{{route('admin.user.details',$user->id)}}">View</a>
                  
                    <a class="btn btn-danger" href="{{route('admin.user.delete',$user->id)}}">Delete</a>
                    </td>

            </tr>
        @endforeach
    
    
    </tbody>
</table>





@endsection