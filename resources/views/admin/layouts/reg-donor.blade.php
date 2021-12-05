@extends('admin.index') 


@section('content')



    <h1 class="mt-4">Register as a Donor</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                <p class="alert alert-danger">{{$error}}</p>
            </div>
        @endforeach
    @endif

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    <form action ="{{route('donor.add')}}" method='POST'>
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input required name='Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date_of_birth</label>
            <input required name='Date_of_birth' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Weight</label>
            <input required name='Weight' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blood_group</label>
            <select required name='Blood_group' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <select class="form-select" aria-label="Default select example"> -->
                <option>A+</option>
  <option>B+</option>
  <option>O+</option>
  <option>AB+</option>
  <option>A-</option>
  <option>B-</option>
  <option>O-</option>
  <option>AB-</option>
</select>

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <select required name='Gender' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <select class="form-select" aria-label="Default select example"> -->
  <!-- <option selected>Open this select menu</option> -->
  <option>Male</option>
  <option>Female</option>
  <option>Others</option>
 
</select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_wants_to_donate</label>
            <select required name='Organ_wants_to_donate' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <select class="form-select" aria-label="Default select example"> -->
                <option value=>Kidney</option>
  <option>Cornea</option>
  <option>Heart</option>
  <option>Lung</option>
  <option>Liver</option>
</select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Details</label>
            <input required name='Details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contact</label>
            <input required name='Contact' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input required name='Email' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input required name='Address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
