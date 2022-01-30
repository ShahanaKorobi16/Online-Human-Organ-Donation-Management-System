@extends('admin.index')


@section('content')


<h1 class="mt-4" style="background-color:#73C6B6;">
    <Center><h1>Donation Post Report</h1></Center>
</h1>
<p align="right"> <a href="{{route('admin.dashboard')}}"  type='table' class="btn btn-secondary">Go Back</a>
      </p>

<div id="PrintTableArea">

@if ($errors->any())
     @foreach ($errors->all() as $error)
         <p class="alert alert-danger">{{$error}}</p>
     @endforeach
 @endif
<!-- <table class="table table-dark table-striped"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <div>
    <form>
        <div class="input-group rounded mt-3 mb-2">
            <input type="date" class="form-control rounded" value="{{request()->from_date}}" name="from_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <input type="date" class="form-control rounded" value="{{request()->to_date}}" name="to_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
    <button type="submit">submit</button>
  </span>
        </div>
    </form>
</div>


<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>

<div class="row">


    <!-- <div class="col-md-1"></div> -->
    <div class="col-md-1">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                <th scope="col">Sl</th>
                    <th scope="col">Donor_Name</th>
                    <!-- <th scope="col">user_id</th>
                    <th scope="col">Date_of_Birth</th> -->
                    <th scope="col">Blood_group</th>
                    
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">NID_Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Organ_want_to_donate</th>
                    <!-- <th scope="col">Details</th> -->
                    <!-- <th scope="col">Image</th> -->
                    <th scope="col">Post_Date</th>
                    <!-- <th scope="col">Action</th>
                    <th scope="col">Status</th>
                     <th scope="col">#</th> -->
                    
                </tr>
            </thead>

            <tbody>
                @foreach($adposts as $adpost)
                <tr>
                <th>{{$adpost->id}}</th>
                    <th>{{$adpost->username}}</th>
                    <!-- <th>{{$adpost->user_id}}</th>
                    <td>{{$adpost->date_of_birth}}</td> -->
                    <td>{{$adpost->blood_group}}</td>
                
                    <td>{{$adpost->contact}}</td>
                    <td>{{$adpost->email}}</td>
                    <td>{{$adpost->nid}}</td>
                    <td>{{$adpost->address}}</td>
                    <td><h4>{{$adpost->organ->Organ_name}}</h4></td>
                    <!-- <td>{{$adpost->Details}}</td> -->
                    <!-- <td>{{$adpost->Details}}</td> -->
                    <!-- <td><img src="{{url('/uploads/'.$adpost->image)}}" width="100px" alt="prescription image"></td> -->
                    <td>{{$adpost->Post_Date}}</td>
                    <!-- <td> 
                    <a class="btn btn-primary"  href="{{route('website.post.details',$adpost->id)}}">View</a>
                    <a class="btn btn-danger" href="{{route('website.post.delete',$adpost->id)}}">Delete</a>
                    <a class="btn btn-info" href="{{route('website.post.edit',$adpost->id)}}">Update</a>
                    </td>
                    
                    <td>{{$adpost->status}}</td>                <td> 
          
      <a class="btn btn-success" href="{{route('admin.post.approve',$adpost->id)}}">Approve</a>
           -->
            </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
    <!-- <div class="col-md-1"></div> -->
</div>
</div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection