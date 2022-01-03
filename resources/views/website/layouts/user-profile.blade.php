
<link rel="stylesheet" type="text/css" href="{{url('css/website/profile.css')}}">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <center>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span> </span></div>
        </div>

						<h6 class="Email">{{auth()->user()->Email}}</h6>
            
        <form action ="{{route('website.profile.show')}}" method='POST'>
       @csrf
       @method('put')
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
              
                <h4 class="text-right">User Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels"><h2>Username</label><input type="text" class="form-control" placeholder="Username" value="{{auth()->user()->username}}"></div>
                    <div class="col-md-6"><label class="labels"><h2>Email</label><input type="text" class="form-control" value="{{auth()->user()->email}}" placeholder="Email"></div>
                </div>
                <div class="row mt-3">
                   
                    <div class="col-md-12"><label class="labels"><h2>Date_of_birth</label><input type="text" class="form-control" placeholder="Date_of_birth" value="{{auth()->user()->date_of_birth}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Weight</label><input type="text" class="form-control" placeholder="Weight" value="{{auth()->user()->weight}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Blood_group</label><input type="text" class="form-control" placeholder="Blood_group" value="{{auth()->user()->blood_group}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Gender</label><input type="text" class="form-control" placeholder="Gender" value="{{auth()->user()->gender}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Contact</label><input type="text" class="form-control" placeholder="Contact" value="{{auth()->user()->contact}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Address</label><input type="text" class="form-control" placeholder="Address" value="{{auth()->user()->address}}"></div>

                </div>
<!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>  -->
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