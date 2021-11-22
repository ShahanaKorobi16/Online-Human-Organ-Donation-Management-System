@extends('admin.index')


@section('content')



    <h1 class="mt-4">Add to Organ</h1>
    
     <form action ="{{route('category.add')}}" method='POST'>
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_name</label>
            <input name='Organ_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_details</label>
            <input name='Organ_details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection