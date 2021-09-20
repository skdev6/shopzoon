<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Helendo &#8211; Minimalis Furniture eCommerce HTML Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('frontend')}}/images/favicon.ico">
	<link rel="stylesheet" href="{{asset('frontend')}}/css/vendor/vendor.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/plugins.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/css/style.min.css">
</head>

<body class="">
    @include('frontend.components.header')
	<div id="main-wrapper">
		<div class="site-wrapper-reveal">
            @yield('content')
		</div>
		@include('frontend.components.footer')
	</div>
    @include('frontend.components.footer-nesessary')
	<script src="{{asset('frontend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="{{asset('frontend')}}/js/vendor/jquery-3.5.1.min.js"></script>
	<script src="{{asset('frontend')}}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
	<script src="{{asset('frontend')}}/js/vendor/bootstrap.min.js"></script>
	<script src="{{asset('frontend')}}/js/plugins/plugins.js"></script>
	<script src="{{asset('frontend')}}/js/main.js"></script>
</body>
</html>