<h1 class="mt-4" style="background-color:#73C6B6;"><center>Create New Donation Post</center></h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                <p class="alert alert-danger">{{$error}}</p>
            </div>
        @endforeach
    @endif

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
      <form action ="{{route('website.dstore')}}" method='POST'>
     
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Donor_Name</label>
            <input required name='Donor_Name' type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date_of_Birth</label>
            <input required name='Date_of_Birth' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blood_group</label>
            <select required name='Blood_group' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <select class="form-select" aria-label="Default select example"> -->
                <option >A+</option>
  <option >B+</option>
  <option >O+</option>
  <option >AB+</option>
  <option >A-</option>
  <option >B-</option>
  <option >O-</option>
  <option >AB-</option>
</select>
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
            <label for="exampleInputEmail1" class="form-label">Organ_wants_to_donate</label>
            <select required name='Organ_wants_to_donate' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <option value=>Kidney</option>
            <option>Cornea</option>
            <option>Heart</option>
            <option>Lung</option>
            <option>Liver</option>
        </select>
        </div>
       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Post_Date</label>
            <input required name='Post_Date' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  <div class="col-sm-4"></div>
</div>