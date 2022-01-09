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
									<img src="{{url('images/img1.jpg')}}" alt="">
									<div class="flex-caption" style="background-color:#A3E4D7" >
										<p style="background-color:#1F618D; color: bisque;">Hope</p>
									</div>
								</li>
								<li>
									<img src="{{url('images/img2.jpg')}}" alt="">
									<div class="flex-caption c2" style="background-color:#154360" >
										<p style="background-color:#7FB3D5; color: bisque;">Save</p>
									</div>
								</li>
								<li>
									<img src="{{url('images/img33.jpg')}}" alt="">
									<div class="flex-caption" style="background-color:#A3E4D7 ;">
										<p style="background-color:#1F618D; color: bisque;">Help</p>
									</div>
								</li>
							</ul>
						</div>
						<span id="responsiveFlag"></span>
					</div>

					<a href="" class="donate" style="width: 45%; margin: auto; margin-top: 33px;">Find a Donor??? <br>or<br> Become a Donor</a>
					
						<div class="text1"><align: center>You can change the life of those, who have no hope by donating Organ</center></div>
						<p>One organ donor can save up to 7 lives and transform over 50 lives. As an organ donor, you can save the life of someone who is suffering from a life-threatening disease or someone who was in a serious accident.</p>
						Organ and tissue donation is the gift of life. Up to seven or eight people can benefit through solid organ donations of the lungs, heart, kidneys, liver, pancreas and intestines. Countless others are helped, and their quality of life is improved from tissue donation that includes heart valves, veins, skin, bones and corneas.
					
					<div class="clear"></div>
					
                  <div style="display: flex; width: 100%; margin: auto;">
					<div class="" style="width: 30%; padding-right: 30px; margin-left: 182px;">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#21618C;">Organ Needed Post</div>
							<div class="pad">
							Organ Donation is the gift of an organ to a person who needs a transplant to improve his condition and health status. Donated organs give the recipient the opportunity of a longer and better quality of life.<div class="alright" style="text-align:center;"><a href="{{route('website.create-post')}}" class="btn" style="background-color:#2E86C1 ;">Create Post</a></div>
	
								<div class="alright" style="text-align:center;"><a href="{{route('website.patient.post.show')}}" class="btn" style="background-color:#5DADE2;">View all Post</a></div>
							
								
							</div>
						</div>
					</div>
					<div class="" style="width: 30%;">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#21618C;">Donation Post</div>
							<div class="pad">
							Organ donation is an opportunity to help others. People who are on an organ waiting list typically have end-stage organ disease that significantly impacts their quality of life and may be near the end of their life.<div class="alright" style="text-align:center;"><a href="{{route('website.donor-post-create')}}" class="btn" style="background-color:#2E86C1 ;">Create Post</a></div>
								<div class="alright" style="text-align:center;"><a href="{{route('website.postshow')}}" class="btn" style="background-color:#5DADE2 ;">View All Post</a></div>
							</div>
						</div>
					</div>
		</div>
					<div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#76D7C4;">Our Mission</div>
							<div class="pad">
							
Organ Donation is the gift of an organ to a person who needs a transplant to improve his condition and health status...<div class="alright" ><a href="{{route('website.mission')}}" class="btn">Read More...</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#D2B4DE;">Our Vission</div>
							<div class="pad">
							Our vision is to bridge the gap between the number of people who need organs and the number of people who donate organs...<div class="alright"><a href="{{route('website.vission')}}" class="btn">Read More...</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#F5B7B1;">Motivation</div>
							<div class="pad">
							Organ Donation is the gift of an organ to a person who needs a transplant to improve his condition and health status... <div class="alright"><a href="{{route('website.motivation')}}" class="btn">Read More...</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#82E0AA">Objective</div>
							<div class="pad">The primary objective is to promote awareness of life-saving solid organ transplants. The secondary objective is...  <div class="alright"><a href="{{route('website.objective')}}" class="btn">Read More...</a></div></div>
						</div>
					</div>
		</div>
					<!-- <div class="clear"></div>
					<div class="grid_12">
						<h2>You can help Them</h2>
						<div id="owl">
							<div class="item">
								<a href="#"><img src="images/page1_img4.jpg" alt="">Jim <br>
								8 years</a>
							</div>
							<div class="item it1">
								<a href="#"><img src="images/page1_img5.jpg" alt="">Ann <br>
								3 years</a>
							</div>
							<div class="item it2">
								<a href="#"><img src="images/page1_img6.jpg" alt="">Linda <br>
								5 years</a>
							</div>
							<div class="item it3">
								<a href="#"><img src="images/page1_img7.jpg" alt="">Mark  <br>
								6 years</a>
							</div>
							<div class="item">
								<a href="#"><img src="images/page1_img4.jpg" alt="">Jim <br>
								8 years</a>
							</div>
							<div class="item it1">
								<a href="#"><img src="images/page1_img5.jpg" alt="">Ann <br>
								3 years</a>
							</div>
							<div class="item it2">
								<a href="#"><img src="images/page1_img6.jpg" alt="">Linda <br>
								5 years</a>
							</div>
							<div class="item it3">
								<a href="#"><img src="images/page1_img7.jpg" alt="">Mark  <br>
								6 years</a>
							</div>
						</div>
					</div> -->
					<!-- <div class="grid_4">
						<h3 class="nowrap mb0">Successful stories</h3>
						<time class="st1" datetime="2013-01-01">29.11.2013</time>
						Lorem ipsum dolor sit amet, consectetur iscing elit. Inllis eratattis neque facilisis, sit ameticies erat rutrum. Cras facilisis, nulla velrral auctor leo magna sodales felis, quis malesuada nib odio ut velitylok. Proin pharetra luctus.
						<div class="alright"><a href="#" class="btn">Read More</a></div>
					</div> -->
					<div class="grid_10 prefix_1">
						<h3><center>About Us</center></h3>
						<img src="#" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<p>All you wanted to know about this website developed to help people to find donor on time and to save life, you can find <span class="col1"><a href=" http://blog.templatemonster.com/free-website-templates/" rel="dofollow">here</a></span>.</p>
							Visit the category of <span class="col1"><a href="http://www.templatemonster.com/category/charity-website-templates" rel="nofollow ">Charity templates</a></span> to find more themes of this kind.
						</div>
						<div class="clear"></div>
						<div class="alright"><center><a href="#" class="btn btn-info">Read More</a></center></div>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
		
			@include('website.partials.footer')
		</div>
	</body>
</html>