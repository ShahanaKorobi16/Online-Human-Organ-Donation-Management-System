@extends('admin.index')

@section('content')
<html>


<h1 class="mt-4">Organ List</h1>
<p align="right"> <a href="{{route('admin.dashboard')}}"  type='table' class="btn btn-secondary"><i class="fas fa-backward"></i></a>
      </p>
<p align="right"> <a href="{{route('category.form')}}"  type='table' class="btn btn-success"><i class="fas fa-plus-square"></i>Add Organ</a>
      </p>



<table class="table table-success table-striped">
                        <thead>
    <tr>
      <th scope="col">Organ Id</th>
      <th scope="col">Organ Name</th>
      <th scope="col">Organ Details</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  
  @foreach($organs as $category)
   <tr>
   <th>{{$category->id}}</th>
      <th>{{$category->Organ_name}}</th>
      <th>{{$category->Organ_details}}</th>
      <td> 
                    <a class="btn btn-primary" href="{{route('admin.category.details',$category->id)}}"><i class="fas fa-eye"></i>View Availability</a>
                  
                    <a class="btn btn-danger" href="{{route('admin.category.delete',$category->id)}}"><i class="fas fa-trash-alt"></i></a>
                    </td>
    </tr>
   
    
    @endforeach
    
  
  </tbody>
</table>
</html>
@endsection