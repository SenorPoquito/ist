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
							@if ( !$areas->count() ) @else
							<li class="has-child"><a href="#">Wards</a>
								<ul class="child-navigation">
									@foreach ( $areas as $area)
									<li><a href="{{ route('areas.show', [$area->slug]) }}">{{$area->name}}</a></li>
									@endforeach
								</ul>
							</li>
							@endif @if ( !$ages->count() ) @else
							<li class="has-child"><a href="#">Grades</a>
								<ul class="child-navigation">
									@foreach ( $ages as $age)
									<li><a href="{{ route('ages.show', [$age->slug]) }}">{{$age->name}}</a></li>
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
				<div class="col-md-3 col-sm-3">
					<div id="sidebar" class="sidebar">

						<aside id="zoner-wsp-2" class="widget search-property">
							<h3 class="widget-title">Search Properties</h3>
							<form role="form" id="form-sidebar" class="form-search" action="" method="GET">
								<input type="hidden" id="filter_property" name="filter_property" value="7add8c389c">
								<div class="form-group">
									<input type="text" class="form-control" id="sb-keyword" name="sb-keyword" value="" placeholder="Keyword">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="sb-zip" name="sb-zip" value="" placeholder="Zip Code">
								</div>
								<div class="form-group">
									<select id="property_status" class="property_status" name="sb-status" style="display: none;">
										<option value="">Status</option>
										<option value="22">Rent (8)</option>
										<option value="21">Sale (25)</option>
									</select>
								</div>
								<!-- /.form-group -->
								<div class="form-group">
									<select id="property_type" class="property_type" name="sb-type" style="display: none;">
										<option value="">Type</option>
										<option value="24">Apartment (9)</option>
										<option value="25">Condominium (6)</option>
										<option value="26">Cottage (6)</option>
										<option value="29">Family House (4)</option>
										<option value="27">Flat (6)</option>
										<option value="40">House (3)</option>
										<option value="30">Single Home (2)</option>
										<option value="31">Villa (1)</option>
									</select>
								</div>
								<!-- /.form-group -->
									<div class="form-group">
										<button type="submit" class="btn btn-default">Search Now</button>
									</div>
									<!-- /.form-group -->
									<!-- /#form-map -->
								</div>
							</form>
						</aside>
					</div>
				</div>
			</div>

			<!-- Page Footer -->
			<footer id="page-footer">
				<div class="inner">
					<aside id="footer-main">
						<div class="container">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<article>
										<h3>About Us</h3>
										<p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio id, ornare tortor
										</p>
										<hr>
										<a href="#" class="link-arrow">Read More</a>
									</article>
								</div>
								<!-- /.col-sm-4 -->

								<!-- /.col-sm-4 -->
								<div class="col-md-4 col-sm-4">
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
								<!-- /.col-sm-4 -->
								<div class="col-md-4 col-sm-4">
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
									<div class="col-md-1 col-sm-1">

									</div>
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
		<!-- end Page Content -->

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
