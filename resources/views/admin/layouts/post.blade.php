<!-- @extends('admin.index')

@section('content')


<h1 class="mt-4">Post List</h1>

<table class="table table-success table-striped">
     <thead>
    <tr>
      <th scope="col">Patient_Name</th>
      <th scope="col">Patient_Age</th>
      <th scope="col">Patient_Blood_group</th>
      <th scope="col">Patient_issue</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
 

<tbody>
      @foreach($addposts as $addpost)
    <tr>
      <th>{{$addpost->Patient_Name}}</th>
      <td>{{$addpost->Patient_Age}}</td>
      <td>{{$addpost->Patient_Blood_group}}</td>
      <td>{{$addpost->Patient_issue}}</td>
      
      <td><img src="{{url('/uploads/'.$addpost->image)}}" width="100px" alt="prescription image"></td>
    </tr>
   @endforeach
    </tbody>

</table>
@endsection -->