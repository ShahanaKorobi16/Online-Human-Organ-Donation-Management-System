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
	<!-- <link rel="stylesheet" href="style.css" /> -->
    <h1 class="mt-4" style="background-color:powderblue;">“It takes lives to save lives”</h1>
    <tr>
        <tr>
	<h3 class="mt-4" style="color:blue;">"Organ donation and Transplants can transform lives and reshape futures
         of individuals and families. This is one of the bravest acts of lifesaving 
         which is only possible due to the selfless decision from an organ donor"</h3>
         <img src="img.jpg" alt="Organ Donation" width="500" height="600"> 
         
      <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">New Post</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
</body>
</html>


  



@endsection