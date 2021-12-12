<h1>Patient Details</h1>


<p>Patient_Name: {{$addpost->Patient_Name}}</p>
<p>Date_of_Birth: {{$addpost->Date_of_Birth}}</p>
<p>Blood_group: {{$addpost->Blood_group}}</p>
<p>Contact: {{$addpost->Contact}}</p>
<p>Email: {{$addpost->Email}}</p>
<p>Case: {{$addpost->Case}}</p>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$addpost->image)}}" alt="post">
</p>
<p>Post_Date: {{$addpost->Post_Date}}</p>



<lable>Patient_Name:</lable>
<input type="text" class="form-control" value="{{$addpost->Patient_Name}}">
<input type="file" class="form-control">