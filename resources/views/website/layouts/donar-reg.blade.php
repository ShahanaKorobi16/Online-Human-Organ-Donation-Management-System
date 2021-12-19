<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="{{url('css/website/login.css')}}">



<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form action="{{route('user.registration.post')}}" method="POST" class="login100-form validate-form">
				@csrf	
                <span class="login100-form-title">
						Donor Registration
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required: ex@abc.xyz">
						<input class="input100" type="text" name="Username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid Email is required: ex@abc.xyz">
						<input class="input100" type="text" name="Email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Date_of_birth is required: ex@abc.xyz">
						<input class="input100" type="date" name="Date_of_birth" placeholder="Date_of_birth">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Weight is required: ex@abc.xyz">
						<input class="input100" type="number" name="Weight" placeholder="Weight">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Blood_group is required: ex@abc.xyz">
						<select class="input100" type="text" name="Blood_group" placeholder="Blood_group">
                        <option>A+</option>
                        <option>B+</option>
                        <option>O+</option>
                        <option>AB+</option>
                        <option>A-</option>
                        <option>B-</option>
                        <option>O-</option>
                        <option>AB-</option>
                        </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Gender is required: ex@abc.xyz">
						<select class="input100" type="text" name="Gender" placeholder="Gender">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                        
                        </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <!-- <div class="wrap-input100 validate-input" data-validate = "Organ_Needed is required: ex@abc.xyz">
						<select class="input100" type="text" name="Organ_Needed" placeholder="Organ_Needed">
                        <option>Kidney</option>
                        <option>Cornea</option>
                        <option>Heart</option>
                        <option>Lung</option>
                        <option>Liver</option>
                        </select>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Details is required: ex@abc.xyz">
						<input class="input100" type="text" name="Details" placeholder="Details">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div> -->
                    <div class="wrap-input100 validate-input" data-validate = "Contact is required: ex@abc.xyz">
						<input class="input100" type="number" name="Contact" placeholder="Contact">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Address is required: ex@abc.xyz">
						<input class="input100" type="text" name="Address" placeholder="Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                  
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="{{route('user.login')}}">
							Already have an Account?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            Login now</a>
					</div>
				</form>
			</div>
		</div>
	</div>