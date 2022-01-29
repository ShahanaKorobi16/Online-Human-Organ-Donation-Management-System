<h1 class="mt-4" style="background-color:#73C6B6;"><center>Create New Post</center></h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">

      <form action ="{{route('website.post.update',$addpost->id)}}" method='POST' enctype="multipart/form-data">
       @csrf
       @method('put')
<!-- 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Patient_Name</label>
            <input value="{{$addpost->Patient_Name}}" required name='Patient_Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date_of_Birth</label>
            <input value="{{$addpost->Date_of_Birth}}" required name='Date_of_Birth' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blood_group</label>
            <select value="{{$addpost->Blood_group}}" required name='Blood_group' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
                <option >A+</option>
  <option >B+</option>
  <option >O+</option>
  <option >AB+</option>
  <option >A-</option>
  <option >B-</option>
  <option >O-</option>
  <option >AB-</option>
</select>
        </div> -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hospital_Name</label>
            <input value="{{$addpost->Hospital_Name}}" required name='Hospital_Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hospital_Bed_No</label>
            <input value="{{$addpost->Hospital_Bed_No}}" required name='Hospital_Bed_No' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contact</label>
            <input value="{{$addpost->Contact}}" required name='Contact' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input value="{{$addpost->Email}}" required name='Email' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div> -->
        <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NID_Number</label>
            <input value="{{$addpost->NID_Number}}" required name='NID_Number' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div> -->
        <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input value="{{$addpost->Address}}" required name='Address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div> -->

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_Needed</label>
            <select type="text" required name='organ_id' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @foreach ($organs as $organ)
                <option @if($addpost->organ_id === $organ->id) selected @endif value="{{$organ->id}}">{{$organ->Organ_name}}</option>
            @endforeach
           
            <!-- <option>Kidney</option>
            <option>Cornea</option>
            <option>Heart</option>
            <option>Lung</option>
            <option>Liver</option> -->
        </select>  
        </div>


        <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_Needed</label>
            <select value="{{$addpost->Organ_Needed}}" required name='Organ_Needed' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <option>Kidney</option>
            <option>Cornea</option>
            <option>Heart</option>
            <option>Lung</option>
            <option>Liver</option>
        </select>
        </div> -->
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Case</label>
            <input value="{{$addpost->Case}}" required name='Case' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload_Patient_Prescription</label>
            <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Post_Date</label>
            <input value="{{$addpost->Post_Date}}" required name='Post_Date' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  <div class="col-sm-4"></div>
</div>