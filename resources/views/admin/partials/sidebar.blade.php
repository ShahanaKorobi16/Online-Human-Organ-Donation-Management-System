
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <link rel="stylesheet" href="public/css/style1.css">
        <link rel="stylesheet" href="public/css/styles.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="{{url('/Admin')}}">


                            <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{url('/Admin/dashboard')}}">

                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{url('/Admin/patient')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-shield"></i></div>
                               Admin
                            </a>
                        </div>
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{url('/Admin/Table')}}">
                                <!-- <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div> -->
                                <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                               Donor
                            </a>
                        </div>

                        
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{url('/Admin/patient')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-hospital-user"></i></div>
                               Patient
                            </a>
                        </div>
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{url('/Admin/post')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-paste"></i></div>
                               Post
                            </a>
                        </div>

                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{url('/Admin/stock')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-lungs"></i></div>
                               Stock
                            </a>
                        </div>
                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('admin.category')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-lungs"></i></div>
                               Organ
                            </a>
                        </div>

                    </div>
                    
                </nav>
            </div>
          
        </div>
      
        </body>
        </html>
