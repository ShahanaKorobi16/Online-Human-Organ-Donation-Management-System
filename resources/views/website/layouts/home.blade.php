<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="{{url('images/favicon.ico')}}">
		<link rel="shortcut icon" href="{{url('images/favicon.ico')}}" />
		<link rel="stylesheet" href="{{url('css/website/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{url('css/website/slider.css')}}">
		<link rel="stylesheet" href="{{url('css/website/style.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="{{url('js/website/jquery.js')}}"></script>
		<script src="{{url('js/website/jquery-migrate-1.1.1.js')}}"></script>
		<script src="{{url('js/website/script.js')}}"></script>
		<script src="{{url('js/website/jquery.ui.totop.js')}}"></script>
		<script src="{{url('js/website/superfish.js')}}"></script>
		<script src="{{url('js/website/jquery.equalheights.js')}}"></script>
		<script src="{{url('js/website/jquery.mobilemenu.js')}}"></script>
		<script src="{{url('js/website/jquery.easing.1.3.js')}}"></script>
		<script src="{{url('js/website/owl.carousel.js')}}"></script>
		<script src="{{url('js/website/jquery.flexslider-min.js')}}"></script>
		<script src="{{url('js/website/kwiks.js')}}"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				var owl = $("#owl");
				owl.owlCarousel({
					items : 4, //10 items above 1000px browser width
					itemsDesktop : [995,3], //5 items between 1000px and 901px
					itemsDesktopSmall : [767, 2], // betweem 900px and 601px
					itemsTablet: [700, 2], //2 items between 600 and 0
					itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
					navigation : true,
				});
			})
			var Main = Main || {};
			jQuery(window).load(function() {
				window.responsiveFlag = jQuery('#responsiveFlag').css('display');
				Main.gallery = new Gallery();
				jQuery(window).resize(function() {
					Main.gallery.update();
				});
			});
			function Gallery(){
				var self = this,
					container = jQuery('.flexslider'),
					clone = container.clone( false );
					this.init = function (){
						if( responsiveFlag == 'block' ){
						var slides = container.find('.slides');
						slides.kwicks({
							max : 500,
							spacing : 0
						}).find('li > a').click(function (){
							return false;
						});
						} else {
							container.flexslider();
						}
					}
					this.update = function () {
						var currentState = jQuery('#responsiveFlag').css('display');
						if(responsiveFlag != currentState) {
							responsiveFlag = currentState;
							container.replaceWith(clone);
							container = clone;
							clone = container.clone( false );
							this.init();
						}
					}
				this.init();
			}
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		


@include('website.partials.header')


@yield('content')
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 16, 2013!</div>
				<div class="container_12">

					<div class="">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="{{url('images/img1.jpg')}}" alt="" style="height: 150px; width: 350px;">
									<div class="flex-caption" style="background-color:#A3E4D7" >
										<p style="background-color:#1F618D; color: bisque;">Hope</p>
									</div>
								</li>
								<li>
									<img src="{{url('images/img2.jpg')}}" alt="" style="height: 150px; width: 350px;" >
									<div class="flex-caption c2" style="background-color:#154360" >
										<p style="background-color:#7FB3D5; color: bisque;">Save</p>
									</div>
								</li>
								<li>
									<img src="{{url('images/img33.jpg')}}" alt="" style="height: 150px; width: 350px;">
									<div class="flex-caption" style="background-color:#A3E4D7 ;">
										<p style="background-color:#1F618D; color: bisque;">Help</p>
									</div>
								</li>
							</ul>
						</div>
						<span id="responsiveFlag"></span>
					</div>
















                    @include('website.partials.footer')
		</div>

		  <!-- Option 1: Bootstrap Bundle with Popper -->
		  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	</body>
</html>