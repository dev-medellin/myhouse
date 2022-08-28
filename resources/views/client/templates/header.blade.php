<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/dream-house/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Aug 2022 23:48:36 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>My HOME || Home</title>	

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/images/favicon/dream-favicon.png" />
	<link rel="apple-touch-icon" href="assets/images/favicon/dream-favicon.png" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Raleway:300,400,500,600,700,800,900|Roboto:300,400,500,700" rel="stylesheet">
	
	<!-- =>> All Stylesheet <<= -->
	<!-- Bootstrap v3.3.6 Core CSS-->
    @isset($data['css'])
        @foreach ($data['css'] as $item)
        <link rel="stylesheet" type="text/css" href="assets/css/{{$item}}"/>  
        @endforeach
    @endisset
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- ALL SECTION INCLOSED TO THE WRAPPER -->
	<div class="wrapper">
		<!-- BEGIN LOADING -->
		 <!-- <div id="loader" class="loader">
			<div class="implode">
				<div class="implode-in">
					<div id="cover" class="acting"> 
						<span></span> 
						<span></span> 
						<span></span> 
						<span></span> 
						<span></span> 
						<span></span> 
						<span></span>
					</div>
				</div>
			</div> 
		</div>  -->
        <!-- /#loader -->
		<!-- END LOADING -->
			
		<!-- HEADER AREA START -->
		<header class="header fixed">
			<!-- Header Top Begin -->
			<div class="header-top hidden-xs hidden-sm">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-5">
							<div class="social-to">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>
							</div> <!-- /.social-to -->
						</div> <!-- /.col- -->
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-7">
							<div class="contact-to">
								<div class="contact-text">
									<ul>
										<li><a href="#"><i class="fa fa-map-marker"></i>23 Aro Lane, NY, USA</a></li>
										<li><a href="#"><i class="fa fa-mobile-phone"></i>Login</a></li>
										<li><a href="#"><i class="fa fa-user"></i>Register</a></li>
									</ul>
								</div>
							</div> <!-- /.contact-to -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.header-top -->

			<!-- Main Menu Area Begin -->
			<div class="container">		
				<div class="main-menu-deputy">
					<!-- Navbar visibility controls (<800px) -->
					<div class="menu-when-collapse"></div>
					<div class="menu-collapse-after-effect"></div>
					<div class="logo">
						<a href="index.html">
							<img src="{{ asset('assets/images/logo/logo2.png') }}" alt="Logo">
						</a>
					</div><!-- /.logo -->
				</div><!-- /.main-menu-deputy -->
				<div class="main-menu">
					<div class="close-nav"></div> <!-- Close the menu for mobile -->				
					<ul class="main-nav">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="overview.html">Preview</a></li>
						<li><a href="#">Dropdown</a>
							<ul class="sub-nav">
								<li><a href="#">Dropdown Menu 1</a></li>
								<li><a href="#">Dropdown Menu 2</a></li>
								<li><a href="#">Dropdown Menu 3</a></li>
								<li><a href="#">Dropdown Menu 4</a></li>
								<li><a href="#">Dropdown Menu 5</a></li>
								<li><a href="#">View Right Submenu</a>
									<ul class="sub-nav">
										<li><a href="#">More Right Submenu</a>
											<ul class="sub-nav">
												<li><a href="#">Submenu Item 1</a></li>
												<li><a href="#">Submenu Item 2</a></li>
												<li><a href="#">Submenu Item 3</a></li>
												<li><a href="#">Submenu Item 4</a></li>
												<li><a href="#">Submenu Item 5</a></li>
												<li><a href="#">Submenu Item 6</a></li>
												<li><a href="#">Submenu Item 7</a></li>
											</ul>
										</li>
										<li><a href="#">Many Right Submenu</a>
											<ul class="sub-nav">
												<li><a href="#">Another Item 1</a></li>
												<li><a href="#">Another Item 2</a></li>
												<li><a href="#">Another Item 3</a></li>
												<li><a href="#">Another Item 4</a></li>
												<li><a href="#">Another Item 5</a></li>
											</ul>
										</li>
										<li><a href="#">More Right Submenu</a>
											<ul class="sub-nav">
												<li><a href="#">Submenu Item 1</a></li>
												<li><a href="#">Submenu Item 2</a></li>
												<li><a href="#">Submenu Item 3</a></li>
												<li><a href="#">Submenu Item 4</a></li>
												<li><a href="#">Submenu Item 5</a></li>
											</ul>
										</li>
										<li><a href="#">Many Right Submenu</a>
											<ul class="sub-nav">
												<li><a href="#">Submenu Item 1</a></li>
												<li><a href="#">Submenu Item 2</a></li>
												<li><a href="#">Submenu Item 3</a></li>
												<li><a href="#">Submenu Item 4</a></li>
											</ul>
										</li>
									</ul> <!-- /.sub-nav -->
								</li>
								<li><a href="#">Look Right Submenu</a>
									<ul class="sub-nav">
										<li><a href="#">More Right Submenu</a>
											<ul class="sub-nav">
												<li><a href="#">Submenu Item 1</a></li>
												<li><a href="#">Submenu Item 2</a></li>
												<li><a href="#">Submenu Item 3</a></li>
												<li><a href="#">Submenu Item 4</a></li>
												<li><a href="#">Submenu Item 5</a></li>
											</ul>
										</li>
										<li><a href="#">Many Right Submenu</a>
											<ul class="sub-nav">
												<li><a href="#">Another Item 1</a></li>
												<li><a href="#">Another Item 2</a></li>
												<li><a href="#">Another Item 3</a></li>
												<li><a href="#">Another Item 4</a></li>
												<li><a href="#">Another Item 5</a></li>
											</ul>
										</li>
										<li><a href="#">More Right Submenu</a>
											<ul class="sub-nav">
												<li><a href="#">Submenu Item 1</a></li>
												<li><a href="#">Submenu Item 2</a></li>
												<li><a href="#">Submenu Item 3</a></li>
												<li><a href="#">Submenu Item 4</a></li>
											</ul>
										</li>
										<li><a href="#">Many Right Submenu</a>
											<ul class="sub-nav">
												<li><a href="#">Submenu Item 1</a></li>
												<li><a href="#">Submenu Item 2</a></li>
												<li><a href="#">Submenu Item 3</a></li>
												<li><a href="#">Submenu Item 4</a></li>
											</ul>
										</li>
									</ul> <!-- /.sub-nav -->
								</li>
							</ul> <!-- /.sub-nav -->
						</li>
						<li><a href="property-details.html">Services</a></li>
						<li><a href="#">Pages</a>
							<ul class="sub-nav">
								<li><a href="overview.html">Overview</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="properties.html">Properties</a></li>
								<li><a href="property-details.html">Property Details</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="single.html">Right Sidebar Page</a></li>
								<li class="active"><a href="index.html">Home</a></li>
							</ul>
						</li>
						<li><a href="single.html">Single</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul><!-- /.main-nav -->

					<!--  Header Top visibility controls (=<991px) -->
					<div class="header-top visible-xs visible-sm">
						<div class="visible-xs visible-sm">
							<div class="social-to">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>
							</div> <!-- /.social-to -->
						</div> <!-- /.col- -->
						<div class="visible-xs visible-sm">
							<div class="contact-to">
								<div class="contact-text">
									<ul>
										<li><a href="#"><i class="fa fa-map-marker"></i>23 Aro Lane, NY, USA</a></li>
										<li><a href="#"><i class="fa fa-mobile-phone"></i>+345-000-111-2222</a></li>
										<li><a href="#"><i class="fa fa-clock-o"></i>Mon - Sat  10.00 - 19.00</a></li>
									</ul>
								</div>
							</div> <!-- /.contact-to -->
						</div> <!-- /.col- -->
					</div> <!-- /.header-top -->
				</div><!-- /.main-menu -->
			</div><!-- /.container -->
			<!-- Main Menu Area End -->
		</header><!-- /.header -->
		<!-- /HEADER AREA END -->
