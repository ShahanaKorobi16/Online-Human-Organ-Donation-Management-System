@extends('admin.index')


@section('content')



    <h1 class="mt-4">Register as Patient</h1>
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

    <form action ="{{route('patient.add')}}" method='POST' enctype="multipart/form-data">
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input required name='Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Age</label>
            <input required name='Age' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input required name='address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contact</label>
            <input required name='contact' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input required name='email' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blood_group</label>
            <Select required name='Blood_group' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                <option value="1">Male</option>
  <option>Female</option>
  <option>Others</option>
</select>
        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Case</label>
            <input required name='Case' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_needed</label>
            <select required name='Organ_needed' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <select class="form-select" aria-label="Default select example"> -->
                <option>Kidney</option>
  <option>Cornea</option>
  <option>Heart</option>
  <option>Lung</option>
  <option>Liver</option>
</select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload_Patient_Image</label>
            <input required name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
