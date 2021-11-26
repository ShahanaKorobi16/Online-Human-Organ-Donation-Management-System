@extends('admin.index')


@section('content')



    <h1 class="mt-4">Register as a Donor</h1>
    
    <form action ="{{route('donor.add')}}" method='POST'>
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input required name='Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Age</label>
            <input required name='Age' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blood_group</label>
            <input required name='Blood_group' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <select class="form-select" aria-label="Default select example">
                <option value="1">A+</option>
  <option value="2">B+</option>
  <option value="2">O+</option>
  <option value="2">AB+</option>
  <option value="2">A-</option>
  <option value="2">B-</option>
  <option value="2">O-</option>
  <option value="2">AB-</option>
</select>

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <input required name='Gender' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <select class="form-select" aria-label="Default select example">
  <!-- <option selected>Open this select menu</option> -->
  <option value="1">Male</option>
  <option value="2">Female</option>
  <option value="2">Others</option>
 
</select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_wants_to_donate</label>
            <input required name='Organ_wants_to_donate' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <select class="form-select" aria-label="Default select example">
                <option value="1">Kidney</option>
  <option value="2">Cornea</option>
  <option value="2">Heart</option>
  <option value="2">Lung</option>
  <option value="2">Liver</option>
</select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Details</label>
            <input required name='Details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
