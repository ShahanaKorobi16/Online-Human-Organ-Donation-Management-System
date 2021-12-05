<h1 style="background-color:#73C6B6;"><Center>Post List</Center></h1>
<!-- <table class="table table-dark table-striped"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
<div class="row">
 
<div class="col-sm-4"></div>
  <div class="col-sm-4">
<table class="table table-success table-striped">
     <thead>
    <tr>
      <th scope="col">Patient_Name</th>
      <th scope="col">Date_of_Birth</th>
      <th scope="col">Blood_group</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Case</th>
      <th scope="col">Image</th>
      <th scope="col">Post_Date</th>
    </tr>
  </thead>
 

<tbody>
      @foreach($addposts as $addpost)
    <tr>
      <th>{{$addpost->Patient_Name}}</th>
      <td>{{$addpost->Date_of_Birth}}</td>
      <td>{{$addpost->Blood_group}}</td>
      <td>{{$addpost->Contact}}</td>
      <td>{{$addpost->Email}}</td>
      <td>{{$addpost->Case}}</td>  
      <td><img src="{{url('/uploads/'.$addpost->image)}}" width="100px" alt="prescription image"></td>
      <td>{{$addpost->Post_Date}}</td>
    </tr>
   @endforeach
    </tbody>

</table>
</div>
  <div class="col-sm-4"></div>
</div>
