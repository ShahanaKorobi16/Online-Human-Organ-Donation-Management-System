<!-- @extends('admin.index')


@section('content')



    <h1 class="mt-4">Create New Post</h1>
    
    <form action ="{{route('admin.store')}}" method='POST'enctype="multipart/form-data">
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Patient_Name</label>
            <input required name='Patient_Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Patient_Age</label>
            <input required name='Patient_Age' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Patient_Blood_group</label>
            <select required name='Patient_Blood_group' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           
                <option value="1">A+</option>
  <option value="2">B+</option>
  <option value="2">O+</option>
  <option value="2">AB+</option>
  <option value="2">A-</option>
  <option value="2">B-</option>
  <option value="2">O-</option>
  <option value="2">AB-</option>
</select>
        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Patient_issue</label>
            <input required name='Patient_issue' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload_Patient_Prescription</label>
            <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection -->
