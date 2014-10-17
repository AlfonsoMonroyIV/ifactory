@extends ('home/layout')
@section ('title') Portafolio @stop
@section ('content')
<div id="text"><img src="{{asset('assets/home/img/portfolio.png')}}" alt="" title=""></div>
			<div id="stripe"></div>
			
			<ul class="portfolio-nav clearfix">
				<li class="segment-1 selected-1"><a href="#" data-value="all">Todo</a></li>
				<li class="segment-2"><a href="#" data-value="desarrollos"><span>01</span>Desarrollos</a></li>
				<li class="segment-0"><a href="#" data-value="tutoriales"><span>02</span>Tutoriales de Laravel</a></li>
				<!--li class="segment-4 last"><a href="#" data-value="ejemplox"><span>02</span>Ejemplo</a></li-->
			</ul>
			
			<ul id="list" class="portfolio clearfix">
			
				<li data-id="id-1" class="desarrollos">
					<img title="" alt="" src="{{asset('assets/home/img/sample/crud-min.gif')}}">
					<span class="portfolio-overlay"></span>
					<div class="info">
						<p class="info-title">Hola Mundo</p>
						<div class="read-more"><a href="https://github.com/AlfonsoMonroyIV/ifactory/tree/master/laravel" title="View on Github"></a></div>
						<div class="enlarge"><a href="{{asset('assets/home/img/sample/crud.gif')}}" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="{{URL::to('crud')}}" title="Live Demo"></a></div>
					</div>				
				</li>
				<li data-id="id-3" class="tutoriales">					
					<img title="" alt="" src="{{asset('assets/home/img/sample/laravel-welcome.png')}}">
					<span class="portfolio-overlay"></span>		
					<div class="info">
						<p class="info-title">Instalacion de Laravel</p>
						<div class="read-more"><a href="http://laravel.com/docs/installation" title="Read more"></a></div>
						<div class="play"><a href="https://www.youtube.com/watch?v=qFIvuD0u454&feature=youtu.be" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				</li>
				<li data-id="id-4" class="tutoriales">					
					<img title="" alt="" src="{{asset('assets/home/img/sample/laravel-db.png')}}">
					<span class="portfolio-overlay"></span>		
					<div class="info">
						<p class="info-title">Bases de datos Laravel</p>
						<div class="read-more"><a href="http://laravel.com/docs/database" title="Read more"></a></div>
						<div class="play"><a href="https://www.youtube.com/watch?v=4X9S7JvBsd4" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				</li>
				<li data-id="id-5" class="tutoriales">					
					<img title="" alt="" src="{{asset('assets/home/img/sample/laravel-seed.png')}}">
					<span class="portfolio-overlay"></span>		
					<div class="info">
						<p class="info-title">Poblar Base de Datos</p>
						<div class="read-more"><a href="http://laravel.com/docs/migrations" title="Read more"></a></div>
						<div class="play"><a href="https://www.youtube.com/watch?v=li4St-KpZQ0" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				</li>
				<li data-id="id-6" class="tutoriales">					
					<img title="" alt="" src="{{asset('assets/home/img/sample/laravel-bootstrap.png')}}">
					<span class="portfolio-overlay"></span>		
					<div class="info">
						<p class="info-title">Vistas con Bootstrap</p>
						<div class="read-more"><a href="http://laravel.com/docs/4.2/responses" title="Read more"></a></div>
						<div class="play"><a href="https://www.youtube.com/watch?v=NKOYxBskRTI" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				</li>								
						

						
				<!--li data-id="id-20" class="ejemplox">					
					<img title="" alt="" src="img/sample/portfolio-min20.jpg">
					<span class="portfolio-overlay"></span>		
					<div class="info">
						<p class="info-title">Ejemplo con Video ejemplo X</p>
						<div class="read-more"><a href="#" title="Read more"></a></div>
						<div class="play"><a href="http://www.youtube.com/watch?v=1dWMIuipn_c" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				</li-->
				
			</ul><!-- portfolio end -->
			
			<ul id="prev-next" class="clearfix">
				<li class="next"><a href="#"></a></li>
				<li class="prev"><a href="#"></a></li>
			</ul>
@stop