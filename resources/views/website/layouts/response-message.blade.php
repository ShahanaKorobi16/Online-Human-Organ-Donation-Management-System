
<h1 class="mt-4" style="background-color:#73C6B6; ">
    <!-- <Center>Responder's Details</Center> -->
</h1>
@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<!-- <table class="table table-dark table-striped"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="row">

    <div class="col-md-3" style="padding: 20px"><h4>Total Comments: {{$no_of_comments}}</h4></div>
    <div class="col-md-6">
    <!-- <table class="table table-bordered border-dark">
  <thead class="table-Primary"> -->
     
            <!-- <thead> -->
                <!-- <tr>
                <th scope="col">Comment no</th>
                    < <th scope="col">user_id</th> 
                    <th scope="col">Patient Name</th>
                    
                   
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                
                    <th scope="col">Address</th>
                    <th scope="col">Why_need_this_organ</th>
                  
                 
                </tr>
            </thead>


            <tbody> -->
            <p  align="right" class="mt-4"> <a href="{{route('website.home')}}"  type='table' class="btn btn-secondary">Go Back</a>
      </p>
            <h4 class="card-header"><center>Responder's Details</center></h4>
            <br>
            
                @foreach($responses as $response)
                <!-- <tr>
               
                <th>{{$response->id}}</th>
                     <th>{{$response->user_id}}</th> 
                    <th>{{$response->username}}</th>
                    
                    
                    <td>{{$response->contact}}</td>
                    <td>{{$response->email}}</td>
               
                    <td>{{$response->address}}</td>
                    <td><h4>{{$response->Why_need_this_organ}}</h4></td>
                   
                </tr>
             
            </tbody> -->


            <div class="card">
  
  <div class="card-body">
  <!-- <p class="card-text">Comment no: {{$response->id}}</p> -->
    <h5 class="card-title">Patient Name: {{$response->username}}</h5>
    <p class="card-text">Contact: {{$response->contact}}</p>
    <p class="card-text">Email: {{$response->email}}</p>
    <p class="card-text">Address: {{$response->address}}</p>
    <p class="card-text">Why_need_this_organ: {{$response->Why_need_this_organ}}</p>
    <!-- <a type="button" class="btn btn-primary" href="{{route('website.donor-post.details',$response->id)}}">Response</a> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
            @endforeach
            <br>
        </table>
       
        </div>

</div>
</Center>


<!-- @foreach($responses as $response)

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
            Modal body text goes here.</p>
            <p>{{$response->id}}</p>
                    <p>{{$response->user_id}}</p>
                    <p>{{$response->username}}</p>
                    
                    
                    <p>{{$response->Contact}}</p>
                    <p>{{$response->Email}}</p>
               
                    <p>{{$response->Address}}</p>
                    <p><h4>{{$response->Why_need_this_organ}}</p>
                   
               
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach -->