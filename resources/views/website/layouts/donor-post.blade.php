<h1 style="background-color:#73C6B6;"><Center>Donation Post List</Center></h1>

@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<!-- <table class="table table-dark table-striped"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<div class="row">
 <!-- <div class="col-md-1"></div> -->
<div class="col-md-2"> 
<table class="table table-success table-striped"> 
     <thead>
    <tr>
    <th scope="col">Image</th>
      <th scope="col">Donor_Name</th>
      <th scope="col">Date_of_Birth</th>
      <th scope="col">Blood_group</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">NID_Number</th>
      <th scope="col">Address</th>
      <th scope="col">Organ_wants_to_Donate</th>
      <th scope="col">Details</th>
      <th scope="col">Post_Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 

<tbody>
      @foreach($adposts as $adpost)
    <tr>
    <td><img src="{{url('/uploads/'.$adpost->image)}}" width="100px" alt="Upload_Donor_Image"></td>
      <th>{{$adpost->Donor_Name}}</th>
      <td>{{$adpost->Date_of_Birth}}</td>
      <td>{{$adpost->Blood_group}}</td>
      <td>{{$adpost->Contact}}</td>
      <td>{{$adpost->Email}}</td>
      <td>{{$adpost->NID_Number}}</td>
      <td>{{$adpost->Address}}</td>
      <td>{{$adpost->Organ_wants_to_donate}}</td>  
      <td>{{$adpost->Details}}</td>
      <td>{{$adpost->Post_Date}}</td>
      <td> 
                <a class="btn btn-primary" href="{{route('website.donor-post.details',$adpost->id)}}">View</a>
                    <a class="btn btn-danger" href="{{route('website.donor-post.delete',$adpost->id)}}">Delete</a>
                    </td>
    </tr>
   @endforeach
    </tbody>

</table>
</div>
<div class="col-md-1"></div>