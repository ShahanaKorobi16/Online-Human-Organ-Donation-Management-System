
<link rel="stylesheet" type="text/css" href="{{url('css/website/profile.css')}}">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <center>
        <div class="col-md-3 border-right">
         <div class="d-flex flex-column align-items-center text-center p-3 py-5">
         <img src="{{url('uploads/img95.jpg')}}" ></div>
        </div>

						<h6 class="Email">{{auth()->user()->Email}}</h6>
            
        <form action ="{{route('website.profile.update',$users->id)}}" method='POST' enctype="multipart/form-data" >
       @csrf
       @method('put')
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
              
                <h4 class="text-right">Update User Profile</h4>
                </div>
                <div class="row mt-2">

                <div class="col-md-6"><label class="labels"><h2>Username</label><input value="{{$users->username}}" required name="Username" type="text" class="form-control" placeholder="Username" ></div>
                    
                   
                    <div class="col-md-6"><label class="labels"><h2>Email</label><input value="{{$users->email}}" required name="Email" type="text" class="form-control" placeholder="Email"></div>
                </div>
                <div class="row mt-3">
                   
                    <div class="col-md-12"><label class="labels"><h2>Date_of_birth</label><input value="{{$users->date_of_birth}}" required name="Date_of_birth" type="text" class="form-control" placeholder="Date_of_birth" ></div>
                    <div class="col-md-12"><label class="labels"><h2>Weight</label><input value="{{$users->weight}}" required name="Weight" type="text" class="form-control" placeholder="Weight" ></div>
                    <div class="col-md-12"><label class="labels"><h2>Blood_group</label><input value="{{$users->blood_group}}" required name="Blood_group" type="text" class="form-control" placeholder="Blood_group" ></div>
                    <div class="col-md-12"><label class="labels"><h2>Gender</label><input value="{{$users->gender}}" required name="Gender" type="text" class="form-control" placeholder="Gender" ></div>
                    <div class="col-md-12"><label class="labels"><h2>Contact</label><input value="{{$users->contact}}" required name="Contact" type="text" class="form-control" placeholder="Contact" ></div>
                    <div class="col-md-12"><label class="labels"><h2>Address</label><input value="{{$users->address}}" required name="Address" type="text" class="form-control" placeholder="Address" ></div>

<!--                      <!-- <div class="col-md-6"><label class="labels"><h2>Username</label><input type="text" class="form-control" placeholder="Username" value="{{auth()->user()->username}}"></div>
                    <div class="col-md-6"><label class="labels"><h2>Email</label><input type="text" class="form-control" value="{{auth()->user()->email}}" placeholder="Email"></div>
                </div>
                <div class="row mt-3">
                   
                    <div class="col-md-12"><label class="labels"><h2>Date_of_birth</label><input type="text" class="form-control" placeholder="Date_of_birth" value="{{auth()->user()->date_of_birth}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Weight</label><input type="text" class="form-control" placeholder="Weight" value="{{auth()->user()->weight}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Blood_group</label><input type="text" class="form-control" placeholder="Blood_group" value="{{auth()->user()->blood_group}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Gender</label><input type="text" class="form-control" placeholder="Gender" value="{{auth()->user()->gender}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Contact</label><input type="text" class="form-control" placeholder="Contact" value="{{auth()->user()->contact}}"></div>
                    <div class="col-md-12"><label class="labels"><h2>Address</label><input type="text" class="form-control" placeholder="Address" value="{{auth()->user()->address}}"></div> -->

                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
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