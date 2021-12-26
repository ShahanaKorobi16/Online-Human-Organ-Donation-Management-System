<center>
<h1>Patient Details</h1>


<p><h3>Patient_Name:</span></h3><h2><span style="color:#2874A6">{{$addpost->Patient_Name}}</span><h2></p>
<p><h3><span style="color:#2E4053">Date_of_Birth: {{$addpost->Date_of_Birth}}</span></h3></p>
<p><h3><span style="color:#2E4053">Blood_group: {{$addpost->Blood_group}}</span></h2></p>
<p><h3><span style="color:#2E4053">Hospital_Name: {{$addpost->Hospital_Name}}</span></h2></p>
<p><h3><span style="color:#2E4053">Hospital_Bed_No: {{$addpost->Hospital_Bed_No}}</span></h2></p>
<p><h3><span style="color:#2E4053">Email: {{$addpost->Email}}</span></h2></p>
<p><h3><span style="color:#2E4053">NID_Number: {{$addpost->NID_Number}}</span></h2></p>
<p><h3><span style="color:#2E4053">Address: {{$addpost->Address}}</span></h2></p>
<p><h3><span style="color:#2E4053">Organ_Needed: {{$addpost->Organ_Needed}}</span></h2></p>
<p><h3><span style="color:#2E4053">Contact: {{$addpost->Contact}}</span></h2></p>
<p><h3><span style="color:#2E4053">Case: {{$addpost->Case}}</span></h2></p>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$addpost->image)}}" alt="post">
</p>
<p><h3><span style="color:#2E4053">Post_Date: {{$addpost->Post_Date}}</span></h2></p>

</center>

<!-- <lable>Patient_Name:</lable>
<input type="text" class="form-control" value="{{$addpost->Patient_Name}}">
<input type="file" class="form-control"> -->