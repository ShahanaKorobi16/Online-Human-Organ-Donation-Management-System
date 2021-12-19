<center>
<h1>Patient Details</h1>

<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$adpost->image)}}" alt="Donor_Post">
</p>
<p><h3><span style="color:#2E4053">Donor_Name:</span></h3> <h2><span style="color:#2874A6">{{$adpost->Donor_Name}}</span></h2></p>
<p><h3><span style="color:#2E4053"> Date_of_Birth: {{$adpost->Date_of_Birth}}</span></h3></p>
<p><h3><span style="color:#2E4053">Blood_group: {{$adpost->Blood_group}}</span></h2></p>
<p><h3><span style="color:#2E4053">Contact: {{$adpost->Contact}}</span></h2></p>
<p><h3><span style="color:#2E4053">Email: {{$adpost->Email}}</span></h2></p>
<p><h3><span style="color:#2E4053">NID_Number: {{$adpost->NID_Number}}</span></h2></p>
<p><h3><span style="color:#2E4053">Address: {{$adpost->Address}}</span></h2></p>
<p><h3><span style="color:#2E4053">Organ_wants_to_Donate: {{$adpost->Organ_wants_to_donate}}</span></h2></p>
<p><h3><span style="color:#2E4053">Details: {{$adpost->Details}}</span></h2></p>
<p><h3><span style="color:#2E4053">Post_Date: {{$adpost->Post_Date}}</span></h2></p>

</center>


<lable>Donor_Name:</lable>
<input type="text" class="form-control" value="{{$adpost->Donor_Name}}">
<input type="file" class="form-control">