<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>@yield('title', 'Alfonso Monroy IV')</title>

<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/home/css/main.css')}}" />

<link rel="stylesheet" type="text/css" media="print" href="{{ asset('assets/home/css/print.css')}}"  />

<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/home/css/prettyPhoto.css')}}" />

<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:light' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>

<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen" href="css/ie-fix.css" /><![endif]-->

<script type="text/javascript" src="{{ asset('assets/home/js/jquery-1.5.2.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/home/js/jquery.tweet.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/home/js/jquery.ScrollTo.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/home/js/jquery.prettyPhoto.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/home/js/jquery.easing.1.3.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/home/js/jquery.quicksand.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/home/js/jquery.quicksand-config.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/home/js/scripts.js')}}"></script>

<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>
<body>

<div id="page-shadow">

	<div id="page">
	
		<div class="content-innertube">
	
			<div id="header">
			
				<h1>Ra&uacute;l Garc&iacute;a</h1>
				
				<ul id="main-nav">
					<li class="current"><a href="{{URL::to('home')}}">CV</a></li>
					<li><a href="{{URL::to('portafolio')}}">Portfolio</a></li>
					<li><a href="{{URL::to('about')}}">Yo</a></li>
				</ul>
				
				<div class="clear"></div>
				
			</div><!-- header end -->
			
			@yield('content')

		</div><!-- inner end -->
		<div id="footer">
		
			<div id="footer-innertube">
			
				<div id="footer-address">
					<h5>Address</h5>
					<ul>
						<li>123 Street Address,</li>
						<li>Lovely City,</li>
						<li>My Country</li>
					</ul>
				</div><!-- footer-address end -->
				
				<div id="footer-contact">
					<h5>Contact</h5>
					<ul>
						<li>000 123 456 789</li>
						<li><a href="mailto:#" title="Send me an email">address@email.com</a></li>
						<li><a href="contact.php">Contact form<span class="raquo">&#187;</span></a></li>
					</ul>
				</div><!-- footer-contact end -->
				
				<div id="footer-social">
					<h5>Social</h5>
					<ul>
						<li><a href="#" title=""><img src="{{ asset('assets/home/img/twitter.png')}}" alt="twitter" title="My Twitter profile"></a></li>
						<li><a href="#" title=""><img src="{{ asset('assets/home/img/facebook.png')}}" alt="facebook" title="My Facebook profile"></a></li>
						<li><a href="#" title=""><img src="{{ asset('assets/home/img/flickr.png')}}" alt="flickr" title="My Flickr profile"></a></li>
						<li><a href="#" title=""><img src="{{ asset('assets/home/img/linkedin.png')}}" alt="linkedin" title="My Linkedin profile"></a></li>
					</ul>
				</div><!-- footer-social end -->
				
				<div id="footer-resume">
					<h5>My resume</h5>
					<div id="download-resume"><a href="#"></a></div>
				</div><!-- footer-resume end -->
				
				<div class="clear"></div>
				
				<ul id="footer-nav">
					<li><a href="index.html">CV</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="about.html">Yo</a></li>
				</ul>
				
				<div id="go-top"></div>
				
				<div class="clear"></div>
			
			</div><!-- footer-innertube end -->
			
		</div><!-- footer end -->
		
	</div><!-- page end -->
	
</div><!-- page-shadow end -->

</body>
</html>