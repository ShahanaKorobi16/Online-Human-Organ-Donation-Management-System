@extends('admin.index')


@section('content')



    <h1 class="mt-4">Add to Stock</h1>
    
     <form action ="{{route('stock.add')}}" method='POST'>
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quantity</label>
            <input required name='Quantity' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <!-- </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_Id</label>
            <input name='Organ_Id' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div> -->

            <div class="form-group">
            <label for="exampleFormControlSelect1">Select Organ</label>
            <select name="organ_id" class="form-control" id="exampleFormControlSelect1">
                @foreach ($organs as $category)
                <option value="{{$category->id}}">{{$category->Organ_name}}</option> 
                @endforeach
            </select>
         
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
