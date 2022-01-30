
 
<head>
    <!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- <JavaScript Bundle with Popper> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
	  <form action="{{route('website.donor-post.search')}}" method="GET">
<ul class="navbar-nav">

  <center>
<!-- <li class="col-md-4">
<input type="text" placeholder="Search.." name="search">
<button type="submit">Submit</button>
  </li> -->

  <li class="mb-3">
            <!-- <label for="exampleInputEmail1" class="form-label">"Search.."</label> -->
            <select type="text" required name='organ_id' class="form-control" >
            @foreach ($organs as $organ)
                <option value="{{$organ->id}}">{{$organ->Organ_name}}</option>
            @endforeach
            </select>  
			<button type="submit">Submit</button>
</li>
</center>
</ul>
    </form>
</div>
  <div class="col-sm-3"></div>
</div>

	<center>
<h1 class="card-title"><center>All Post</center></h1>
<p  align="right" class="mt-4"> <a href="{{route('website.home')}}"  type='table' class="btn btn-secondary">Go Back</a>
      </p>
	 
@foreach ($adposts as $adpost)
<center>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
	<img  src="{{url('/uploads/'.$adpost->image)}}" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$adpost->username}}</h5>
        <p class="card-text">Organ wants to Donate: {{$adpost->organ->Organ_name}}</p>
        <p class="card-text"><small class="text-muted"></small></p>
		<br>
		<br>
		<a type="button" class="btn btn-primary" href="{{route('website.donor-post.details',$adpost->id)}}"> View</a>
		
			@if(auth()->user()->id == $adpost->user_id)
			<a class="btn btn-danger" href="{{route('website.donor-post.delete',$adpost->id)}}">Delete</a>
			<a class="btn btn-info" href="{{route('website.donor-post.edit',$adpost->id)}}">Update</a>
			
			@else
		<a type="button" class="btn btn-dark" href="{{route('website.create-message',$adpost->id)}}"> Response</a>
		@endif
		<a type="button" class="btn btn-secondary" href="{{route('website.response.comment',$adpost->id)}}">Comment</a>
      </div>
      </div>
    </div>
  </div>
</div>
</center>
@endforeach 

	
 <!-- <div class="section products-block new-arrivals layout-3">
					<div class="block-title">
						<h2 class="title">New <span>Post</span></h2>
                        
					</div>
					<div class="row row-cols-1 row-cols-md-3 g-4">
					<div class="block-content">
						<div class="container">
							<div class="products owl-theme owl-carousel">
							

@foreach ($adposts as $adpost)

								<div class="item">
							
									<div class="product-item">
										<div class="product-image">
									
											<a href="product-detail-left-sidebar.html">
											<img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$adpost->image)}}" alt="Donor_Post">
											</a>
										</div>
										
										<div class="product-info">
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
												<h3><p><span style="color:#2E4053">Donor_Name:</span></h3><h2><span style="color:#2874A6">{{$adpost->Donor_Name}}</span></h2></span></p>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
											<h3>	<span style="color:#2E4053"> Date_of_Birth:</span><span style="color:#2E86C1"> {{$adpost->Date_of_Birth}}</span></h3>
                                                
                                    
											</div>
                                            <div class="product-price">
												
                                            <h3>  <span style="color:#2E4053">Blood_group: </span><span style="color:#2E86C1">{{$adpost->Blood_group}}</span></h3>
                                    
											</div>
                                            <div class="product-price">
											<h3>	<span style="color:#2E4053">Contact:</span><span style="color:#2E86C1"> {{$adpost->Contact}}</span></h3>
                                             
                                    
											</div>
                                            <div class="product-price">
											<h3>	<span style="color:#2E4053">Email:</span><span style="color:#2E86C1"> {{$adpost->Email}}</span></h3>
                                             
                                    
											</div>
                                            <div class="product-price">
											<h3>	<span style="color:#2E4053">NID_Number:</span><span style="color:#2E86C1"> {{$adpost->NID_Number}}</span></h3>
                                               
                                    
											</div>
                                            <div class="product-price">
											<h3>	<span style="color:#2E4053">Address: </span><span style="color:#2E86C1">{{$adpost->Address}}</span></h3>
                                         
                                    
											</div>
                                            <div class="product-price">
											<h3>	<span style="color:#2E4053">Organ_wants_to_Donate:</span><span style="color:#2E86C1"> {{$adpost->Organ_wants_to_donate}}</span></h3>
                                         
                                    
											</div>
                                            <div class="product-price">
											<h3>	<span style="color:#2E4053">Details:</span><span style="color:#2E86C1"> {{$adpost->Details}}</span></h3>
                                         
                                    
											</div>
                                            <div class="product-price">
                                            <h3><span style="color:#2E4053">Post_Date: </span><span style="color:#2E86C1">{{$adpost->Post_Date}}</span></h3>
                                         
                                    <br> <br> <br> <br> <br>
											</div>
											
											<div class="product-buttons">
												<a class="View" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											
											</div>
										</div>
									</div>
								
								</div>
								@endforeach
								
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
                </div> -->
