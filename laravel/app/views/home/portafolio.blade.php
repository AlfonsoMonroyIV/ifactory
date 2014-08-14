@extends ('home/layout')
@section ('title') Portafolio @stop
@section ('content')
<div id="text"><img src="img/portfolio.png" alt="" title=""></div>
			<div id="stripe"></div>
			
			<ul class="portfolio-nav clearfix">
				<li class="segment-1 selected-1"><a href="#" data-value="all">All</a></li>
				<li class="segment-0"><a href="#" data-value="hola_mundo"><span>01</span>Hola Mundo (CRUD - GIT)</a></li>
				<li class="segment-4 last"><a href="#" data-value="ejemplox"><span>02</span>Ejemplo</a></li>
			</ul>
			
			<ul id="list" class="portfolio clearfix">
			
				<li data-id="id-1" class="hola_mundo">
					<img title="" alt="" src="img/sample/portfolio-min1.jpg">
					<span class="portfolio-overlay"></span>
					<div class="info">
						<p class="info-title">Hola Mundo</p>
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big1.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				</li>
				<li data-id="id-20" class="hola_mundo">					
					<img title="" alt="" src="img/sample/portfolio-min20.jpg">
					<span class="portfolio-overlay"></span>		
					<div class="info">
						<p class="info-title">Ejemplo con Video Hola Mundo</p>
						<div class="read-more"><a href="#" title="Read more"></a></div>
						<div class="play"><a href="http://www.youtube.com/watch?v=1dWMIuipn_c" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				</li>
						

						
				<li data-id="id-20" class="ejemplox">					
					<img title="" alt="" src="img/sample/portfolio-min20.jpg">
					<span class="portfolio-overlay"></span>		
					<div class="info">
						<p class="info-title">Ejemplo con Video ejemplo X</p>
						<div class="read-more"><a href="#" title="Read more"></a></div>
						<div class="play"><a href="http://www.youtube.com/watch?v=1dWMIuipn_c" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				</li>
				
			</ul><!-- portfolio end -->
			
			<ul id="prev-next" class="clearfix">
				<li class="next"><a href="#"></a></li>
				<li class="prev"><a href="#"></a></li>
			</ul>
@stop