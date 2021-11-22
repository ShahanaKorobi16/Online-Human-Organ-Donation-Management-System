@extends('admin.index')

@section('content')
<html>


<h1 class="mt-4">Organ Details</h1>
<p align="right"> <a href="{{route('category.form')}}"  type='table' class="btn btn-success">Add to Organ</a>
      </p>



<table class="table table-success table-striped">
                        <thead>
    <tr>
      <th scope="col">Organ Id</th>
      <th scope="col">Organ Name</th>
      <th scope="col">Organ Details</th>
      
    </tr>
  </thead>
  <tbody>
  
  @foreach($organs as $category)
   <tr>
   <th>{{$category->id}}</th>
      <th>{{$category->Organ_name}}</th>
      <th>{{$category->Organ_details}}</th>
     
    </tr>
   
    
    @endforeach
    
  
  </tbody>
</table>
</html>
@endsection