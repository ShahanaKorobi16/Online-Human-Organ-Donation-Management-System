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

					<a href="{{route('website.donar-reg')}}" class="donate" style="width: 30%; margin: auto; margin-top: 33px;">Donar Registration</a>
					
						<div class="text1"><align: center>You can change the life of those who have no hope by donating Organ</center></div>
						<p>Etiam dui eros, laoreet sit amet est vel,modo venenatis eros. Fusce adipiscing quam id riss sagittis, non consequat lacus interdum. Proin  tincidunt nulla, eu sodales arcu.</p>
						Quisquerra nulla nunc, eu ultrices libero ultricies eget. Phasellus accumsan justo vitae feugiat placerat. Praesent vel ultrices velit. Suspendisse risus justo, lacinia vitae eleifend
					
					<div class="clear"></div>
					
                  <div style="display: flex; width: 100%; margin: auto;">
					<div class="" style="width: 30%; padding-right: 30px; margin-left: 182px;">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#21618C;">Organ Needed Post</div>
							<div class="pad">
							Faert sit amet est l,mmodo venenatis eros. Kusce ng quam id risus sagittisnel consequat lacusut tinn sodales arcuisqum.<div class="alright" style="text-align:center;"><a href="{{route('website.create-post')}}" class="btn" style="background-color:#2E86C1 ;">Create Post</a></div>
	
								<div class="alright" style="text-align:center;"><a href="{{route('website.post')}}" class="btn" style="background-color:#5DADE2;">View all Post</a></div>
							
								
							</div>
						</div>
					</div>
					<div class="" style="width: 30%;">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#21618C;">Donation Post</div>
							<div class="pad">
							Faert sit amet est l,mmodo venenatis eros. Kusce ng quam id risus sagittisnel consequat lacusut tinn sodales arcuisqum.<div class="alright" style="text-align:center;"><a href="{{route('website.donor-post-create')}}" class="btn" style="background-color:#2E86C1 ;">Create Post</a></div>
								<div class="alright" style="text-align:center;"><a href="{{route('website.donor-post')}}" class="btn" style="background-color:#5DADE2 ;">View All Post</a></div>
							</div>
						</div>
					</div>
		</div>
					<div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#76D7C4;">Our Mission</div>
							<div class="pad">
								Faert sit amet est l,mmodo venenatis eros. Kusce ng quam id risus sagittisnel consequat lacusut tinn sodales arcuisqum.<div class="alright" ><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#D2B4DE;">Our Vission</div>
							<div class="pad">
								Keet sit amet est el,mmodo venenatis eros. Fusce ng quam id risus sagittisnel consequat lacusut tinn sodales arcuisque.<div class="alright"><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#F5B7B1;">Motivation</div>
							<div class="pad">
								Boetosit amet est el,mmodo venenatis eros. Musce ng quam id risus sagittisnel monsequat lacusut tinn
								sodales arcuisqut <div class="alright"><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title" style="background-color:#82E0AA">Objective</div>
							<div class="pad">Holot sit amet est el,mmodo venenatis eros. Jolosceng huam id risus sagittisnel consequat lacusut tinn sodales arcuisqmol.<div class="alright"><a href="#" class="btn">Read More</a></div></div>
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
					<div class="grid_4">
						<h3 class="nowrap mb0">Successful stories</h3>
						<time class="st1" datetime="2013-01-01">29.11.2013</time>
						Lorem ipsum dolor sit amet, consectetur iscing elit. Inllis eratattis neque facilisis, sit ameticies erat rutrum. Cras facilisis, nulla velrral auctor leo magna sodales felis, quis malesuada nib odio ut velitylok. Proin pharetra luctus.
						<div class="alright"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_7 prefix_1">
						<h3>About Us</h3>
						<img src="images/page1_img8.jpg" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<p>All you wanted to know about this freebie produced by TemplateMonster.com, you can find <span class="col1"><a href=" http://blog.templatemonster.com/free-website-templates/" rel="dofollow">here</a></span>.</p>
							Visit the category of <span class="col1"><a href="http://www.templatemonster.com/category/charity-website-templates" rel="nofollow ">Charity templates</a></span> to find more themes of this kind.
						</div>
						<div class="clear"></div>
						<div class="alright"><a href="#" class="btn">Read More</a></div>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
		
			@include('website.partials.footer')
		</div>
	</body>
</html>