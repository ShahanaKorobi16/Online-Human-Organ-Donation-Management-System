<h1>Patient Details</h1>


<p>Username: {{$users->username}}</p>
<p>Email: {{$users->email}}</p>
<p>Date_of_birth: {{$users->date_of_birth}}</p>
<p>Weight: {{$users->weight}}</p>
<p>Blood_group: {{$users->blood_group}}</p>
<p>Gender: {{$users->gender}}</p>
<p>Organ_Needed: {{$users->organ_Needed}}</p>
<p>Details {{$users->details}}</p>
<p>Contact: {{$users->contact}}</p>
<p>Address: {{$users->address}}</p>





<lable>Username:</lable>
<input type="text" class="form-control" value="{{$users->username}}">
<input type="file" class="form-control">