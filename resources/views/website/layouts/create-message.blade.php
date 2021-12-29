<h1 class="mt-4" style="background-color:#16A085 ;"><center>Contact</center></h1>
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

 
      <form action ="{{route('admin.mstore')}}" method='POST' enctype="multipart/form-data">
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Patient_Name</label>
            <input required name='Patient_Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contact</label>
            <input required name='Contact' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input required name='Email' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
     
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input required name='Address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Why_need_this_organ</label>
            <input required name='Why_need_this_organ' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  <div class="col-sm-4"></div>
</div>