<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{ $title }} | Supercoin-Trade</title>
<link rel="icon" href="{{ asset('templates/old/styles/images/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('templates/old/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<link href="{{ asset('templates/old/styles/animate.css') }}" rel='stylesheet' type='text/css'>
<link href="{{ asset('templates/old/styles/custom.css') }}" rel='stylesheet' type='text/css'>
<link href="{{ asset('templates/old/styles/hover.css') }}" rel='stylesheet' type='text/css'>
<!--<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<script src="{{ asset('templates/old/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('templates/old/styles/setting2.js') }}" type='text/javascript'></script>
<script src="{{ asset('templates/old/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('templates/old/styles/wow.js') }}"></script>
<script src="{{ asset('templates/old/styles/wow.min.js') }}"></script>
</head>

<body>
    <div id="google_translate_element"></div>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    
    <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>
<div class="wrapper">
	 	<div class="bannaerwrapsub">

			<div class="logowrap">

				<div class="content">
                    <div class="logo" style="width: 233px"><a href="{{ route('home') }}"><img src="{{ asset('templates/old/images/glofxlogo.png') }}" style="width: 100%;" alt="" /></a></div>
					<div class="navigation flipInX wow">
            @include('partials.nav')
					</div>
					<div class="loginwrap flipInX wow">
						<ul>
							<li class="login hvr-float-shadow"><a href="{{ route('login') }}">login</a></li>
                			<li class="signup hvr-float-shadow"><a href="{{ route('register') }}">signup</a></li>
					</div>

				</div>

			</div>