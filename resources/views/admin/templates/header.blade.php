<!DOCTYPE html>
<html>

<!-- Mirrored from www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Aug 2022 01:57:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <title>Justdo Pro Laravel Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="shortcut icon" href="favicon.ico">

  @isset($data['css'])
        @foreach ($data['css'] as $item)
        <link rel="stylesheet" type="text/css" href="assets/strict/css/{{$item}}"/>  
        @endforeach
  @endisset
  <!-- end common css -->

  </head>
<body>

  <div class="container-scroller" id="app">
    @include('admin.templates.nav')
	  <div class="container-fluid page-body-wrapper">