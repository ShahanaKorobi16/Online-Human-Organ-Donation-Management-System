<h1 class="mt-4" style="background-color:#16A085 ;"><center>Searched Donor Post</center></h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="clear"></div>
<!-- <div class="container_6"> -->
                        <div class="row">
                            <div class="titles">
                               
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach($adposts as $adpost)
                         <center>   <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                  <a class="g-list" href="">
                                        <div class="img-hover" style="width: 45%; margin: auto; margin-top: 33px;">
                                         <img src="{{url('/uploads/'.$adpost->image)}}" width="220px" height="300px" alt="prescription image">
                                        </div>
                                        <div class="info-gallery" style="width: 45%; margin: auto; margin-top: 20px;">
                                          <h3><center>{{$adpost->username}}</center></h3>
                                            <h5><span style="color:#2E4053"><center>Organ wants to Donate:{{$adpost->organ->Organ_name}}</center></span></h5>
                                           
                                 
                                            <hr class="separator"> 
                                                    <a class="btn btn-primary" style="width: 45%; margin: auto; margin-top:5px;" href="{{route('website.donor-post.details',$adpost->id)}}">View</a> 
                                        </div>
                                    </a>     
                                   
                        
                        </div>
                    </div>
                </div>
             </div>
</center>
             @endforeach 
