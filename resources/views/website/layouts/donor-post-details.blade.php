<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>
<div id="PrintTableArea">

<h1>Donor Details</h1>
<p  align="right" class="mt-4"> <a href="{{route('website.home')}}"  type='table' class="btn btn-secondary">Go Back</a>
      </p>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$adpost->image)}}" alt="Donor_Post">
</p>
<p><h3><span style="color:#2E4053">Donor_Name:</span></h3> <h2><span style="color:#2874A6">{{$adpost->username}}</span></h2></p>


@if(auth()->user()->role=='admin')
<p><h4><span style="color:#2E4053"> Date_of_Birth: {{$adpost->date_of_birth}}</span></h4></p>
<p><h4><span style="color:#2E4053">NID_Number: {{$adpost->NID_Number}}</span></h4></p>
<p><h4><span style="color:#2E4053">Address: {{$adpost->Address}}</span></h4></p>
@endif


<p><h4><span style="color:#2E4053">Blood_group: {{$adpost->blood_group}}</span></h4></p>
<p><h4><span style="color:#2E4053">Contact: {{$adpost->contact}}</span></h4></p>
<p><h4><span style="color:#2E4053">Email: {{$adpost->email}}</span></h4></p>

<p><h4><span style="color:#2E4053">Organ_wants_to_Donate: {{$adpost->organ->Organ_name}}</span></h4></p>
<p><h4><span style="color:#2E4053">Quantity: {{$adpost->Quantity}}</span></h4></p>
<p><h4><span style="color:#2E4053">Details: {{$adpost->Details}}</span></h4></p>
<p><h4><span style="color:#2E4053">Post_Date: {{$adpost->Post_Date}}</span></h4></p>

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
<!-- <lable>Donor_Name:</lable>
<input type="text" class="form-control" value="{{$adpost->Donor_Name}}">
<input type="file" class="form-control"> -->