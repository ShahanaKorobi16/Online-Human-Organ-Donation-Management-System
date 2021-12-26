@extends('admin.index')

@section('content')
<html>


<h1 class="mt-4">Donor List of individual Organ with Quantity</h1>




<table class="table table-success table-striped">
                        <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Donar Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Organ</th>
      <th scope="col">Quantity</th>
      <th scope="col">Contact</th>
      <th scope="col">NID</th>
      <th scope="col">Address</th>


      
    </tr>
  </thead>
  @php 
    $total = 0;
  @endphp
  <tbody>
  @foreach($organs as $key=>$category)
   <tr>
       <th>{{$key+1}}</th>
   <th>{{$category->Donor_Name}}</th>
   <th>{{$category->Date_of_Birth}}</th>
   <th>{{$category->Blood_group}}</th>
   <th><h4>{{$category->Organ_wants_to_donate}}</h4></th>
   <th>{{$category->Quantity}}</th>
   @php 
    $quantity = $category->Quantity;
    $total = $quantity+$total;
   @endphp
   
   <th>{{$category->Contact}}</th>
   <th>{{$category->NID_Number}}</th>
   <th>{{$category->Address}}</th>
     
    </tr>
   
    
    @endforeach
    
  
  </tbody>
</table>

<table >
  <thead>
    <tr>
      <th>Total quantity</th>
      
    </tr>
  </thead>
  <tbody>

    <tr>
      <th><h3>{{$total}}</h3></th>
      
    </tr>
    
  </tbody>
</table>
</html>
@endsection