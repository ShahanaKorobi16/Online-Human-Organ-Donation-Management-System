<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
<h1>Patient Details</h1>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>
<div id="PrintTableArea">


<p><h3>Patient_Name:</span></h3><h2><span style="color:#2874A6">{{$addpost->username}}</span><h2></p>
<!-- <p><h4><span style="color:#2E4053">Date_of_Birth: {{$addpost->user_id}}</span></h4></p> -->
<p><h4><span style="color:#2E4053">Date_of_Birth: {{$addpost->date_of_birth}}</span></h4></p>
<p><h4><span style="color:#2E4053">Blood_group: {{$addpost->blood_group}}</span></h4></p>
<p><h4><span style="color:#2E4053">Hospital_Name: {{$addpost->Hospital_Name}}</span></h4></p>
<p><h4><span style="color:#2E4053">Hospital_Bed_No: {{$addpost->Hospital_Bed_No}}</span></h4></p>
<p><h4><span style="color:#2E4053">Email: {{$addpost->email}}</span></h4></p>
<p><h4><span style="color:#2E4053">NID_Number: {{$addpost->NID_Number}}</span></h4></p>
<p><h4><span style="color:#2E4053">Address: {{$addpost->address}}</span></h4></p>
<p><h4><span style="color:#2E4053">Organ_Needed: {{$addpost->organ_id}}</span></h4></p>
<p><h4><span style="color:#2E4053">Contact: {{$addpost->contact}}</span></h4></p>
<p><h4><span style="color:#2E4053">Case: {{$addpost->Case}}</span></h4></p>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$addpost->image)}}" alt="post">
</p>
<p><h4><span style="color:#2E4053">Post_Date: {{$addpost->Post_Date}}</span></h4></p>

</center>
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

<!-- <lable>Patient_Name:</lable>
<input type="text" class="form-control" value="{{$addpost->Patient_Name}}">
<input type="file" class="form-control"> -->