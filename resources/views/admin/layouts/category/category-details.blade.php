@extends('admin.index')

@section('content')

<html>


<p  align="right" class="mt-4"> <a href="{{route('admin.category')}}"  type='table' class="btn btn-secondary">Go Back</a>
      </p>
<div id="PrintTableArea">
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
   <th>{{$category->username}}</th>
   <th>{{$category->date_of_birth}}</th>
   <th>{{$category->blood_group}}</th>
   <th><h4>{{$category->organ->Organ_name}}</h4></th>
   <th>{{$category->Quantity}}</th>
   @php 
    $quantity = $category->Quantity;
    $total = $quantity+$total;
   @endphp
   
   <th>{{$category->contact}}</th>
   <th>{{$category->NID_Number}}</th>
   <th>{{$category->address}}</th>
     
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

<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


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
@endsection