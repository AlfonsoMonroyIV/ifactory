@extends ('home/layout')
@section ('title')Acerca de mi @stop
@section ('content')
			<div id="text"><img src="{{asset('assets/home/img/aboutme.png')}}" alt="" title=""></div>
			<div id="stripe"></div>
			
			<div id="about" class="clearfix">
			
				<img src="{{ asset('assets/home/img/sample/photo.jpg')}}" alt="" title="">
				
				<h2>A few words about me</h2>
				
				<p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in nisl elit, id fermentum ipsum. Nullam nibh sem, facilisis cursus malesuada non, condimentum sed mauris. Aenean consequat, nunc eget molestie convallis, neque est rhoncus ligula, volutpat varius purus nisl non diam. Phasellus enim arcu, pretium sed tincidunt tempor, consequat a lorem. Vestibulum ligula nulla, blandit a ullamcorper in, scelerisque ullamcorper justo.</p>
				
				<blockquote class="about-me">
					<div class="quote-top"></div>
					&#8220;Vestibulum leo dolor, tristique vel consectetur ultrices, dapibus ut odio. Integer eget pulvinar lorem. Phasellus blandit libero eget ante vulputate a convallis sapien vestibulum. Proin at leo lacus, a semper. &#8220;
					<p class="quote-author">Joe Doe, <a href="#" title="">Web Design Studio</a></p>
				</blockquote>
				
			</div><!-- about end -->
					
			<div id="about-middle" class="clearfix">
				
				<div id="content-left">
					
					<div class="clearfix"><h2>My skills</h2></div>
					
						<ul id="chart">
							<li class="five">Photoshop</li>
							<li class="four">Windows</li>
							<li class=" three">Office</li>
							<li class="five">HTML5</li>
							<li class="four">JavaScript</li>
						</ul>
						
						<div id="axis"></div>
					
				</div><!-- content-left end -->
					
				<div id="content-right">
					
					<div class="clearfix"><h2>What can I do</h2></div>
					
						<ul id="check">
							<li>Nam vel diam at ligula pharetra imperdiet at eget magna.</li>
							<li>Curabitur ac erat quis nisl lobortis mattis a vitae ligula.</li>
							<li>Morbi et diam magna, at tincidunt tortor.</li>
							<li>Morbi auctor dignissim lacus, quis ullamcorper metus sodales id.</li>
							<li>Maecenas elementum nibh id sapien sodales non placerat risus interdum.</li>
							<li class="last">Donec luctus mollis elit, eget vulputate felis lacinia quis.</li>
						</ul>
					
				</div><!-- content-right end -->
				
			</div><!-- about-middle end -->
				
			<div id="twitter" class="clearfix">
				
				<div id="twitter-btn"><a href="#"></a></div>
					
				<div id="last-tweets">
					<div class="tweet"></div> 
				</div>
				
			</div><!-- twitter end -->
@stop
@stop