
<h1 style="background-color:#73C6B6;">
    <Center>Post List</Center>
</h1>
<p align="right"> <a href="{{route('admin.dashboard')}}"  type='table' class="btn btn-secondary"><i class="fas fa-backward"></i></a>
      </p>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>
<div id="PrintTableArea">

@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<!-- <table class="table table-dark table-striped"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="row">


    <!-- <div class="col-md-1"></div> -->
    <div class="col-md-1">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                <th scope="col">Sl</th>
                    <th scope="col">Patient_Name</th>
                    <th scope="col">user_id</th>
                    <th scope="col">Date_of_Birth</th>
                    <th scope="col">Blood_group</th>
                    <th scope="col">Hospital_Name</th>
                    <th scope="col">Hospital_Bed_No</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">NID_Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Organ_Needed</th>
                    <th scope="col">Case</th>
                    <th scope="col">Image</th>
                    <th scope="col">Post_Date</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                     <th scope="col">#</th>
                    
                </tr>
            </thead>

            <tbody>
                @foreach($addposts as $addpost)
                <tr>
                <th>{{$addpost->id}}</th>
                    <th>{{$addpost->username}}</th>
                    <th>{{$addpost->user_id}}</th>
                    <td>{{$addpost->date_of_birth}}</td>
                    <td>{{$addpost->blood_group}}</td>
                    <td>{{$addpost->Hospital_Name}}</td>
                    <td>{{$addpost->Hospital_Bed_No}}</td>
                    <td>{{$addpost->contact}}</td>
                    <td>{{$addpost->email}}</td>
                    <td>{{$addpost->nid}}</td>
                    <td>{{$addpost->address}}</td>
                    <td><h4>{{$addpost->organ->Organ_name}}</h4></td>
                    <td>{{$addpost->Case}}</td>
                    <td><img src="{{url('/uploads/'.$addpost->image)}}" width="100px" alt="prescription image"></td>
                    <td>{{$addpost->Post_Date}}</td>
                    <td> 
                    <a class="btn btn-primary"  href="{{route('website.post.details',$addpost->id)}}"><i class="fas fa-eye"></i></a>
                    <a class="btn btn-danger" href="{{route('website.post.delete',$addpost->id)}}"><i class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-info" href="{{route('website.post.edit',$addpost->id)}}"><i class="fas fa-edit"></i></a>
                    </td>
                    
                    <td>{{$addpost->status}}</td>                <td> 
          
      <a class="btn btn-success" href="{{route('admin.post.approve',$addpost->id)}}"><i class="fas fa-thumbs-up"></i></a>
          
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