<h1 style="background-color:#5499C7;"><center>Register as a Patient</center></h1>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4"><form >
       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input required name='Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date_of_birth</label>
            <input required name='Date_of_birth' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Weight</label>
            <input required name='Weight' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blood_group</label>
            <select required name='Blood_group' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <select class="form-select" aria-label="Default select example"> -->
                <option>A+</option>
  <option>B+</option>
  <option>O+</option>
  <option>AB+</option>
  <option>A-</option>
  <option>B-</option>
  <option>O-</option>
  <option>AB-</option>
</select>

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <select required name='Gender' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <select class="form-select" aria-label="Default select example"> -->
  <!-- <option selected>Open this select menu</option> -->
  <option>Male</option>
  <option>Female</option>
  <option>Others</option>
 
</select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_Needed</label>
            <select required name='Organ_wants_to_donate' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <select class="form-select" aria-label="Default select example"> -->
                <option value=>Kidney</option>
  <option>Cornea</option>
  <option>Heart</option>
  <option>Lung</option>
  <option>Liver</option>
</select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Details</label>
            <input required name='Details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  <div class="col-sm-4"></div>
</div>