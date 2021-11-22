@extends('admin.index')

@section('content')
<html>


<h1 class="mt-4">Stock Details</h1>
<p align="right"> <a href="/Admin/stock/addstock"  type='table' class="btn btn-success">Add to Stock</a>
      </p>



<table class="table table-success table-striped">
                        <thead>
    <tr>
      <th scope="col">Stock Id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Organ</th>
     
      
    </tr>
  </thead>
  <tbody>
  @foreach($stocks as $stock)
   <tr>
   <th>{{$stock->id}}</th>
      <th>{{$stock->Quantity}}</th>
      <th>{{$stock->organ->Organ_name}}</th>
      
      
    </tr>
   
    
    @endforeach

    
  
  </tbody>
</table>
</html>
@endsection