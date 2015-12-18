<!DOCTYPE html>

<html lang="en-US">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ThemeStarz">

	<link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Roboto:300,400,700')}}" rel='stylesheet' type='text/css'>
	<link href="{{asset('fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/jquery.slider.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/owl.transitions.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/style.css') }}" type="text/css">



	<title>International Schools Tokyo</title>

</head>

<body class="page-homepage navigation-fixed-top page-slider horizontal-search-float" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
	<!-- Wrapper -->
	<div class="wrapper">

		<div class="navigation">
			<div class="secondary-navigation">
				<div class="container">
					<div class="contact">
						<figure>
							<strong>Phone:</strong>+81-80-2231-2233</figure>
						<figure>
							<strong>Email:</strong>contact@international-schools-tokyo.com</figure>
					</div>
					<div class="user-area">
						<div class="actions">
							Languages
						</div>
						<div class="language-bar">
							<a href="#" class="active">
								<img src="{{ asset('img/flags/gb.png')}}" alt="">
							</a>
							<a href="#">
								<img src="{{ asset('img/flags/jp.png')}}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<header class="navbar" id="top" role="banner">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand nav" id="brand">
							<a href="{{ URL::route('home') }}">
								<img height="65px" src="{{ asset('img/logo.png')}}" alt="brand">
							</a>
						</div>
					</div>
					<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
						<ul class="nav navbar-nav">
							@if ( !$wards->count() )
					    @else
							<li class="has-child"><a href="#">Wards</a>
								<ul class="child-navigation">
									@foreach ( $wards as $ward)
									<li><a href="property-detail.html">{{$ward->name}}</a></li>
									@endforeach
								</ul>
							</li>
							@endif
							@if ( !$grades->count() )
							@else
							<li class="has-child"><a href="#">Grades</a>
								<ul class="child-navigation">
									@foreach ( $grades as $grade)
									<li><a href="property-detail.html">{{$grade->name}}</a></li>
									@endforeach
								</ul>
							</li>
							@endif
							<li><a href="submit.html">Submit</a></li>

							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
					<!-- /.navbar collapse-->
					<div class="add-your-property">
						<a href="submit.html" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Add Your Property</span></a>
					</div>
				</header>
				<!-- /.navbar -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.navigation -->

		<!-- Page Content -->
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<div id="page-content">
						@yield('content')
					</div>

				</div>
			</div>
		</div>
		<!-- end Page Content -->

		<!-- Page Footer -->
		<footer id="page-footer">
			<div class="inner">
				<aside id="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<article>
									<h3>About Us</h3>
									<p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio id, ornare tortor
									</p>
									<hr>
									<a href="#" class="link-arrow">Read More</a>
								</article>
							</div>
							<!-- /.col-sm-3 -->
							<div class="col-md-3 col-sm-3">
								<article>
									<h3>Recent Schools</h3>
									<div class="property small">
										<a href="property-detail.html">
											<div class="property-image">
												<img alt="" src="{{ asset('img/property-01.jpg')}}">
											</div>
										</a>
										<div class="info">
											<a href="property-detail.html">
												<h4>2186 Rinehart Road</h4>
											</a>
											<figure>Doral, FL 33178 </figure>
											<div class="tag price">$ 72,000</div>
										</div>
									</div>
									<!-- /.property -->
									<div class="property small">
										<a href="property-detail.html">
											<div class="property-image">
												<img alt="" src="{{ asset('img/property-02.jpg')}}">
											</div>
										</a>
										<div class="info">
											<a href="property-detail.html">
												<h4>2479 Murphy Court</h4>
											</a>
											<figure>Minneapolis, MN 55402</figure>
											<div class="tag price">$ 36,000</div>
										</div>
									</div>
									<!-- /.property -->
								</article>
							</div>
							<!-- /.col-sm-3 -->
							<div class="col-md-3 col-sm-3">
								<article>
									<h3>Contact</h3>
									<address>
										<strong>International Schools Tokyo</strong>
										<br> Sanno Park Tower
										<br> Tameikesanno, 105-0001
									</address>
									+81-80-2231-2233
									<br>
									<a href="mailto:contact@international-schools-tokyo.com">Email</a>
								</article>
							</div>
							<!-- /.col-sm-3 -->
							<div class="col-md-3 col-sm-3">
								<article>
									<h3>Useful Links</h3>
									<ul class="list-unstyled list-links">
										<li><a href="{{ URL::route('schools.index') }}">All Schools</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<!-- <li><a href="#">Login and Register Account</a></li> -->
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Terms and Conditions</a></li>
									</ul>
								</article>
							</div>
							<!-- /.col-sm-3 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</aside>
				<!-- /#footer-main -->
				<aside id="footer-thumbnails" class="footer-thumbnails"></aside>
				<!-- /#footer-thumbnails -->
				<aside id="footer-copyright">
					<div class="container">
						<span>Copyright International Schools Tokyo© 2015. All Rights Reserved.</span>
						<span class="pull-right"><a href="#page-top" class="roll">Go to top</a></span>
					</div>
				</aside>
			</div>
			<!-- /.inner -->
		</footer>
		<!-- end Page Footer -->
	</div>

	<div id="overlay"></div>




	<script type="text/javascript" src="{{ asset('js/jquery-2.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/smoothscroll.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.placeholder.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/icheck.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.vanillabox-0.1.5.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/retina-1.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jshashtable-2.1_src.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.numberformatter-1.2.3.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/tmpl.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.dependClass-0.1.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/draggable-0.1.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.slider.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
	<!--[if gt IE 8]>
<script type="text/javascript" src="../assets/js/ie.js"></script>
<![endif]-->
	<script>
		$(window).load(function() {
			initializeOwl(false);
		});
	</script>
</body>

</html>
