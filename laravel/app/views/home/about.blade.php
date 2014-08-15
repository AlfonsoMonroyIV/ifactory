@extends ('home/layout')
@section ('title')Acerca de mi @stop
@section ('content')
			<div id="text"><img src="{{asset('assets/home/img/aboutme.png')}}" alt="" title=""></div>
			<div id="stripe"></div>
			
			<div id="about" class="clearfix">
			
				<img src="{{ asset('assets/home/img/sample/profile.png')}}" alt="" title="">
				
				<h2>Un poco sobre mi...</h2>
				
				<p class="about-text">Soy un apasionado de la tecnologia que le encanta la idea de poder estar a un clic de un sin fin de conocimiento, creo que el Internet es la herramienta de inclusion mas poderosa jamas creada, me gusta pensar lo que se puede hacer y lo que existira en un futuro y por supuesto el saber que soy parte de esto, musico de quinta, aprendiz del mundo, critico de si mismo, amante del cine, bailarin cantante del mundo.</p>		
				<blockquote class="about-me">
					<div class="quote-top"></div>
					&#8220;You're not your job. You're not how much money you have in the bank. You're not the car you drive. You're not the contents of your wallet. You're not your fucking khakis. You're the all-singing, all-dancing crap of the world. &#8220;
					<p class="quote-author">Tyler Durden, <a href="http://www.imdb.com/title/tt0137523/" title="">Fight Club</a></p>
				</blockquote>
				
			</div><!-- about end -->
					
			<div id="about-middle" class="clearfix">
				
				<div id="content-left">
					
					<div class="clearfix"><h2>Mis Habilidades</h2></div>
					
						<ul id="chart">
							<li class="five">PHP</li>
							<li class="four">MySQL</li>
							<li class=" three">C#</li>
							<li class="three">Java</li>
							<li class="four">Web Design</li>
						</ul>
						
						<div id="axis"></div>
					
				</div><!-- content-left end -->
					
				<div id="content-right">
					
					<div class="clearfix"><h2>¿Qué puedo hacer?</h2></div>
					
						<ul id="check">
							<li>Mejorar procesos a travez de su automatizacion.</li>
							<li>Brindar soluciones efectivas con el uso de las TI.</li>
							<li>Generar soluciones que brinden valor a organizaciones.</li>
							<li>Desarrollar ideas para crear una mejor calidad de vida.</li>
							<li class="last">Aprender.</li>
						</ul>
					
				</div><!-- content-right end -->
				
			</div><!-- about-middle end -->
				
			<div id="twitter" class="clearfix">
				
				<div id="twitter-btn"><a href="https://twitter.com/AlfonsoMonroyIV"></a></div>
					
				<div id="last-tweets">
					<div class="tweet"></div> 
				</div>
				
			</div><!-- twitter end -->
@stop
