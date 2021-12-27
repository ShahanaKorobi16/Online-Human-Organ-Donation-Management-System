@extends('admin.index')

@section('content')

<h1 class="mt-4" style="background-color:#73C6B6; ">
    <Center>Message List</Center>
</h1>
@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<!-- <table class="table table-dark table-striped"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-3">
    <table class="table table-bordered border-dark">
  <thead class="table-Primary">
            <!-- <thead> -->
                <tr>
                    <th scope="col">Patient_Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                
                    <th scope="col">Address</th>
                    <th scope="col">Why_need_this_organ</th>
                 
                </tr>
            </thead>


            <tbody>
                @foreach($msgs as $msg)
                <tr>
               
                    <th>{{$msg->Patient_Name}}</th>
                  
                    <td>{{$msg->Contact}}</td>
                    <td>{{$msg->Email}}</td>
               
                    <td>{{$msg->Address}}</td>
                    <td><h4>{{$msg->Why_need_this_organ}}</h4></td>
              
                   
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- <div class="col-md-1"></div> -->
</div>
</Center>
@endsection