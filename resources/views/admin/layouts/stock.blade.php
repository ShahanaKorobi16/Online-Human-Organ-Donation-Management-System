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
      <th scope="col">Action</th>
     
      
    </tr>
  </thead>
  <tbody>
  @foreach($stocks as $organs)
   <tr>
   <th>{{$organs->id}}</th>
      <th>{{$organs->Quantity}}</th>
      <!-- <th>{{$organs->organ->Organ_name}}</th> -->
      <td><a href="{{route('admin.stock.details',$organs->id)}}" class="btn btn-primary">View</a>
</td>
    </tr>
    @endforeach

  </tbody>
</table>
</html>
@endsection