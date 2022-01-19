@extends('admin.index')

@section('content')
<h1 class="mt-4" style="background-color:#73C6B6; ">
    <Center>Donor Post Message List</Center>
</h1>
<p align="right"> <a href="{{route('admin.message')}}"  type='table' class="btn btn-secondary">Go Back</a>
      </p>
@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<!-- <table class="table table-dark table-striped"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<div class="row">
 <div class="col-md-0"></div>
<div class="col-md-0"> 
<table class="table table-success table-striped"> 
     <thead>
    <tr>
    <th scope="col">Image</th>
      <th scope="col">Donor_Name</th>
      <th scope="col">user_id</th>
      <th scope="col">Date_of_Birth</th>
      <th scope="col">Blood_group</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">NID_Number</th>
      <th scope="col">Address</th>
      <th scope="col">Organ_wants_to_Donate</th>
      <th scope="col">Quantity</th>
      <th scope="col">Details</th>
      <th scope="col">Post_Date</th>
     
    </tr>
  </thead>
 

<tbody>
        <tr>
        <td><img src="{{url('/uploads/'.$donorPosts->image)}}" width="100px" alt="Upload_Donor_Image"></td> 
        <th>{{$donorPosts->username}}</th>
        <th>{{ $donorPosts->user_id}}</th>
        <td>{{ $donorPosts->date_of_birth}}</td>
        <td>{{ $donorPosts->blood_group}}</td>
        <td>{{ $donorPosts->contact}}</td>
        <td>{{ $donorPosts->email}}</td>
        <td>{{ $donorPosts->NID_Number}}</td>
        <td>{{ $donorPosts->address}}</td>
        <td>{{ $donorPosts->Organ_wants_to_donate}}</td> 
        <td>{{ $donorPosts->Quantity}}</td>  
        <td>{{$donorPosts->Details}}</td>
        <td>{{$donorPosts->Post_Date}}</td>
        </tr>
    </tbody>

</table>
</div>
<div class="col-md-0"></div>
</div>
@endsection