
<link rel="stylesheet" type="text/css" href="{{url('css/website/profile.css')}}">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <center>
        <div class="col-md-3 border-right">
         <div class="d-flex flex-column align-items-center text-center p-3 py-5">
         <img src="{{url('uploads/img95.jpg')}}" ></div>
        </div>

						<h6 class="Email">{{auth()->user()->Email}}</h6>
            
        <form action ="{{route('website.profile.edit',auth()->user()->id)}}" method='get' >
       @csrf
     
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
              
                <h4 class="text-right">User Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels"><h1>Username: </label>{{auth()->user()->username}}</h1></div>
                    <div class="col-md-6"><label class="labels"><h2>Email: </label>{{auth()->user()->email}} </div>
                </div>
                <div class="row mt-3">
                <!-- <div class="col-md-6"><label class="labels"><h2>Password: </label>{{auth()->user()->password}} </div> -->
                
                    <div class="col-md-12"><label class="labels"><h2>Date_of_birth: </label>{{auth()->user()->date_of_birth}}</div>
                    <div class="col-md-12"><label class="labels"><h2>Weight: </label>{{auth()->user()->weight}}</div>
                    <div class="col-md-12"><label class="labels"><h2>Blood_group: </label>{{auth()->user()->blood_group}}</div>
                    <div class="col-md-12"><label class="labels"><h2>Gender: </label>{{auth()->user()->gender}}</div>
                    <div class="col-md-12"><label class="labels"><h2>Contact: </label>{{auth()->user()->contact}}</div>
                    <div class="col-md-12"><label class="labels"><h2>Address: </label>{{auth()->user()->address}}</div>

                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </div> 
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <!-- <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> -->
             </div>
             

        </div>
    </div> 
</div>
</div>
</div> 
</center>