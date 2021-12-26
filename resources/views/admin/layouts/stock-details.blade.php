@extends ('admin.welcome')

@section('contents')
<!-- <a href="/admin/stock/create" class="btn btn-success">Create Stock list</a> -->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Stock Id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Organ</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
   
    $total_quantity = 0;
    @endphp
  
    @foreach($organs as $organ)
    
    <tr>
      <th>{{$organ->Stock Id}}</th>
      <td>{{$organ->Quantity}}</td>
      <td>{{$organ->Organ}}</td>
      <td>
        @php 
        
         
          $Quantity = $organ->quantity;
          $total_quantity = $total_quantity +$quantity;
        @endphp
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<table>
  <thead>
    <tr>
      <th>Total quantity</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$total_quantity}}</td>
    
    </tr>
  </tbody>
</table>

@endsection