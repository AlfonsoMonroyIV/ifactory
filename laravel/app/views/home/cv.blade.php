			@extends ('home/layout')
			@section('title') CV Alfonso Monroy IV  @stop
			@section('content')
			<div id="text"><img src="{{ asset('assets/home/img/resume.png')}}" alt="" title=""></div>
			<div id="stripe"></div>
			

		
			<div id="content-left">
			
				<div class="section">
			
					<div class="clearfix"><h2>Datos Personales</h2></div>
					
					<div class="item">
					
						<ul id="personal-details">
							<li><span>Nombre:</span>José Alfonso Monroy Salcedo</li>
							<li><span>Fecha de Nacimiento:</span>Marzo 29, 1993</li>
							<li class="clearfix"><span>Dirección:</span>
								<ul id="address-lines">
									<li>Santa Maria</li>
									<li>Ocoyoacac</li>
									<li>Estado de México</li>
								</ul>
							</li>
							<li><span>Telefono:</span></li>
							<li><span>Email:</span><a href="mailto:#">alfonso.monroy.ti@gmail</a></li>
						</ul>
						
					</div><!-- item end -->
				
				</div><!-- section end -->
				
				
				<div class="section">
			
					<div class="clearfix"><h2>Experiencia Laboral</h2></div>
					
					<div class="item">
					
						<h3>Programador Analista</h3>
						<h4>ESTIC Vicente Guerrero</h4>
						<div class="date">Abril 2012 - Mayo 2013</div>
						
						<div class="description">
							<p class="margin">Analista y programador en el desarrollo de el sistema de automatización para los procesos escolares en la escuela secundaria.</p>
							<ul>
								<li>Administra Calificaciones</li>
								<li>Aministra Grupos</li>
								<li>Genera Reportes</li>
							</ul>
						</div><!-- description end -->
						
					</div><!-- item end -->
					
					<div class="item last">
					
						<h3>Lider de Proyecto</h3>
						<h4>Industrias Haber´s</h4>
						<div class="date">Mayo 2013 - Septiembre 2013</div>
						
						<div class="description">
							<p class="margin">Desarrollo para gestionar los procesos dentro del almacen de la industria.</p>
							<ul>
								<li>Consistencia en la informacion.</li>
								<li>Agilizacion de los porcesos.</li>
								<li>Generacion de reportes automatizados.</li>
							</ul>
						</div><!-- description end -->
						

						
					</div><!-- item end -->
				
				</div><!-- section end -->
				
			</div><!-- content-left end -->
			
			<div id="content-right">
			
				<div class="section">
			
					<div class="clearfix"><h2>Habilidades Técnicas</h2></div>
					
					<div class="item">
					
						<h3>PHP</h3>
						
						<ul class="stars clearfix">
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Experiencia en desarrollo con PHP 5.4 programacion orientada a objetos a travez del uso la arquitectura MVC, uso de Frameworks PHP como Laravel y Codeigniter.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
					
					<div class="item">
					
						<h3>MySQL</h3>
						
						
						<ul class="stars clearfix">
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Diseño de bases de datos relacionales, manejo de sentencias DDL y DML, creacion de procedures, triggers, views.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
					
					<div class="item">
					
						<h3>C#</h3>
						
						
						<ul class="stars clearfix">
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Desarrollo de aplicaciones sobre ASP .NET.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
					<div class="item">
					
						<h3>Java</h3>
						
						
						<ul class="stars clearfix">
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Programacion a travez del lenguaje solido.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
					<div class="item">
					
						<h3>CSS</h3>
						
						
						<ul class="stars clearfix">
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Desarrollo de estilos a traves del uso de CSS3, conocimiento de framework less para hojas dinamicas, comprencion del lenguaje para implementaciones con Bootsrap.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
					<div class="item">
					
						<h3>HTML</h3>
						
						
						<ul class="stars clearfix">
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-active.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
							<li><img src="{{ asset('assets/home/img/star-inactive.png')}}" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Diseño de interfaces a traves del uso de etiquetas HTML5 para optimizacion de SEO y logro de web responsive.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->													
					
				
				</div><!-- section end -->
				
				
				
				<div class="section">
			
					<div class="clearfix"><h2>Educación</h2></div>
					
					<div class="item">
						<div class="date">2011 - 2015</div><br><br>
						<h3>Ingenieria en Tecnologias de la Información y Comunicación</h3>
						
						<h4>Universidad Tecnológica del Valle de Toluca</h4>
						
						

						
					</div><!-- item end -->

				
				</div><!-- section end -->
				
			</div><!-- content-right end -->
		
		
	
		<div class="clear"></div>
		@stop