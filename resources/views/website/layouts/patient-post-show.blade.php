<head>
    <!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- <JavaScript Bundle with Popper> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">

<form action="{{route('website.post.search')}}" method="GET">
<ul class="navbar-nav">

  <center>
<!-- <li class="col-md-4">
<input type="text" placeholder="Search.." name="search">
<button type="submit">Submit</button>
  </li> -->

  
  <li class="mb-3">
            <!-- <label for="exampleInputEmail1" class="form-label">"Search.."</label> -->
            <select type="text" placeholder="Search by Organ Name.." required name='organ_id' class="form-control"  name="search">
            @foreach ($organs as $organ)
                <option value="{{$organ->id}}">{{$organ->Organ_name}}</option>
            @endforeach
            </select>  	<button type="submit">Submit</button>
		
</li>

</center>
</ul>
    </form>
</div>
<h1 class="card-title"><center>All Post</center></h1>
<p  align="right" class="mt-4"> <a href="{{route('website.home')}}"  type='table' class="btn btn-secondary">Go Back</a>
      </p>

@foreach ($addposts as $addpost)
<center>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
	<img  src="{{url('/uploads/'.$addpost->image)}}" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">{{$addpost->username}}</h3>
   
        <p class="card-text">Organ Needed: {{$addpost->organ->Organ_name}}</p>
       <p class="card-text"><small class="text-muted"></small></p>
        <br>
        <br>
		<a type="button" class="btn btn-primary" href="{{route('website.post.details',$addpost->id)}}"> View</a>
        
        @if(auth()->user()->id == $addpost->user_id)
        <a type="button" class="btn btn-danger" href="{{route('website.post.delete',$addpost->id)}}"> Delete</a>
        <a type="button" class="btn btn-info" href="{{route('website.post.edit',$addpost->id)}}"> Update</a>
        @endif
        <!-- <a type="button" class="btn btn-dark" href="{{route('website.create-message',$addpost->id)}}"> Response</a> -->
      </div>
      </div>
    </div>
  </div>
</div>
</center>
@endforeach 
