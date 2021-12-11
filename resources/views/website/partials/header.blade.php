<header>
			<div class="clear"></div>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="{{url('images/img000.jpg')}}" alt="Your Happy Family"  height="55" width="260">
						</a>
					</h1>
					<div class="menu_block">
					<p align="center">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="#"  type='table' class="btn btn-primary">Create Post</a>
								
								<li><a href="#" type='table' class="btn btn-primary">View Post </a></li>
							
								<li>@if(auth()->user())
								<a class="btn btn-primary" href="{{route('user.logout')}}">Logout</a>
									@else
									<li class="nav-item">
										<a class="btn btn-primary" href="{{route('user.login')}}">Login/Registration</a>
									</li>
									@endif
								<li><a href="/Admin/contact" type='table' class="btn btn-primary">Contacts</center></a></li>
								</p>
				
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>