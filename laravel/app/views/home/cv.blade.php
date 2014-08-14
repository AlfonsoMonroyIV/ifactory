			@extends ('home/layout')
			@section('title') My CV @stop
			@section('content')
			<div id="text"><img src="{{ asset('assets/home/img/resume.png')}}" alt="" title=""></div>
			<div id="stripe"></div>
			

		
			<div id="content-left">
			
				<div class="section">
			
					<div class="clearfix"><h2>Personal details</h2></div>
					
					<div class="item">
					
						<ul id="personal-details">
							<li><span>Name:</span>John William Doe</li>
							<li><span>Born on:</span>July 27, 1989</li>
							<li class="clearfix"><span>Address:</span>
								<ul id="address-lines">
									<li>123 Street Address,</li>
									<li>Lovely City,</li>
									<li>My Country</li>
								</ul>
							</li>
							<li><span>Phone:</span>0 123 456 789</li>
							<li><span>Email:</span><a href="mailto:#">address@email.com</a></li>
						</ul>
						
					</div><!-- item end -->
				
				</div><!-- section end -->
				
				
				<div class="section">
			
					<div class="clearfix"><h2>Work Experience</h2></div>
					
					<div class="item">
					
						<h3>Freelance designing</h3>
						<h4>My own business</h4>
						<div class="date">2008 - present</div>
						
						<div class="description">
							<p class="margin">Duis elit est, sollicitudin non consequat posuere, euismod ac tellus. Curabitur ut nulla lectus. In sodales aliquam dolor vitae lacinia. Nunc gravida molestie imperdiet.</p>
							<ul>
								<li>Duis id neque odio, vitae tempus leo.</li>
								<li>Vivamus ultrices augue viverra massa scelerisque in facilisis arcu blandit.</li>
								<li>Quisque at quam ut sem viverra ultricies.</li>
							</ul>
						</div><!-- description end -->
						
					</div><!-- item end -->
					
					<div class="item last">
					
						<h3>Fashion designer</h3>
						<h4>Fashion and Style Company</h4>
						<div class="date">2007 - 2008</div>
						
						<div class="description">
							<p class="margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, bibendum ac aliquet non, volutpat quis elit.</p>
							<ul>
								<li>Praesent venenatis est quis ipsum fringilla ut pulvinar lectus mollis.</li>
								<li>Curabitur condimentum elementum purus, ut dapibus nunc pulvinar id.</li>
								<li>Fusce id neque dictum felis pharetra elementum in id erat.</li>
							</ul>
						</div><!-- description end -->
						
						<h4 class="refer">References</h4>
						<p>Mr. Jet Lee <br>Main designer<br>000 123 456 789</p>
						
					</div><!-- item end -->
				
				</div><!-- section end -->
				
			</div><!-- content-left end -->
			
			<div id="content-right">
			
				<div class="section">
			
					<div class="clearfix"><h2>Technical Skills</h2></div>
					
					<div class="item">
					
						<h3>Adobe Photoshop</h3>
						
						<ul class="stars clearfix">
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Nullam felis ligula, sodales accumsan vehicula sit amet, faucibus eget augue. Cras scelerisque mi vitae mi commodo id tincidunt elit varius.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
					
					<div class="item">
					
						<h3>Microsoft Windows</h3>
						
						<ul class="stars clearfix">
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-inactive.png" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Mauris vitae sapien non lacus sodales ornare. Integer at augue lacus, non tincidunt sapien. Pellentesque vulputate rhoncus pellentesque.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
					
					<div class="item">
					
						<h3>Microsoft Office</h3>
						
						<ul class="stars clearfix">
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-active.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-inactive.png" alt="" width="27" height="27" title=""></li>
							<li><img src="img/star-inactive.png" alt="" width="27" height="27" title=""></li>
						</ul>
						
						<div class="description">
							<p>Maecenas sollicitudin tincidunt tortor a tincidunt. Pellentesque convallis accumsan sapien. Maecenas laoreet posuere dui ut cursus. Vivamus condimentum diam vitae purus bibendum eget fermentum felis iaculis.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
				
				</div><!-- section end -->
				
				
				
				<div class="section">
			
					<div class="clearfix"><h2>Education</h2></div>
					
					<div class="item">
					
						<h3>Copywriting</h3>
						<h4>Lorem Ipsum University</h4>
						<div class="date">2004 - 2007</div>
						
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
					
					<div class="item last">
					
						<h3>High School</h3>
						<div class="date">2000 - 2004</div>
						
						<div class="description">
							<p class="margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div><!-- description end -->
						
					</div><!-- item end -->
				
				</div><!-- section end -->
				
			</div><!-- content-right end -->
		
		</div><!-- content-innertube end -->
	
		<div class="clear"></div>
		@stop