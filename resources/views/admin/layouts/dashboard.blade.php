@extends('admin.index')

@section('content')
<html>
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
    <div class="d-grid gap-2">
    <h1 class="mt-4" style="background-color:powderblue;">“It takes lives to save lives”</h1>
    <tr>
        <tr>
</div>
</html>   <div class="row">
    

       
        <!-- <div class="d-grid gap-2 d-md-block"> -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body" style=" background-color: #1F618D ;"><h3> {{$count['users']}} </h3> <h5>Total No of User</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style=" background-color: #5499C7">
                                        <a class="small text-white stretched-link" href="{{route('admin.user.list')}}" >View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

        <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body" style=" background-color: #117A65;"><h3>{{$count['organs']}}</h3><h5>Total No of Organ</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style=" background-color: #17A589">
                                        <a class="small text-white stretched-link" href="{{route('admin.category')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                       
                            <!-- <div class="row"> -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body" style=" background-color: #5B2C6F;"><h3>{{$count['posts']}}</h3><h5>Total No of Post</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style=" background-color: #76448A;">
                                        <a class="small text-white stretched-link" href="{{route('website.post')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body" style=" background-color: #D98880;"><h3>{{$count['donorposts']}}</h3><h5>Total No of Donor Post</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style=" background-color: #E6B0AA;">
                                        <a class="small text-white stretched-link" href="{{route('website.donor-post')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body" style=" background-color: #616A6B"><h3>{{$count['messages']}}</h3><h5>Total No of Comments</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style=" background-color: #7F8C8D">
                                        <a class="small text-white stretched-link" href="{{route('admin.message')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                                </div>
                                @endsection