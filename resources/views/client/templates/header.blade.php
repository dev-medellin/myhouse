<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/dream-house/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Aug 2022 23:48:36 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />

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
        <link rel="stylesheet" type="text/css" href="{{  url('assets/css/')}}/{{$item}}"/>  
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
	@include('modals.loginModal')
	@include('modals.verify')
	<!-- ALL SECTION INCLOSED TO THE WRAPPER -->
	<div class="wrapper">
		@include('client.templates.nav')