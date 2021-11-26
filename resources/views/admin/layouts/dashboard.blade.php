@extends('admin.index')

@section('content')

<!-- <!DOCTYPE html> -->


<html >
<head>
<style>
h1 {text-align: center;}
h3 {text-align: center;}
div {
  background-image: url('img.jpg');
}
</style>
</head>
<body>


<div class="d-grid gap-2">
	
    <h1 class="mt-4" style="background-color:powderblue;">“It takes lives to save lives”</h1>


                
     <a href="{{route('patient.reg-patient')}}"  type='table' class="btn btn-success">Register as a Patient</a>



     <a href="{{route('donor.reg-donor')}}"  type='table' class="btn btn-secondary">Register as a Donor</a>
</div>
     
</body>
</html>


  



@endsection