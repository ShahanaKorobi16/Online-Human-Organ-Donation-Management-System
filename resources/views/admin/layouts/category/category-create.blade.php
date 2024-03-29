@extends('admin.index')


@section('content')



    <h1 class="mt-4">Add to Organ</h1>

    
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                <p class="alert alert-danger">{{$error}}</p>
            </div>
        @endforeach
    @endif

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif


     <form action ="{{route('category.add')}}" method='POST'>
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_name</label>
            <input required name='Organ_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organ_details</label>
            <input required name='Organ_details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection