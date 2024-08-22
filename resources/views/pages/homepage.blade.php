<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html><head><title>Industrious by TEMPLATED</title><meta charset="utf-8"><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><meta name="description" content=""><meta name="keywords" content=""><link rel="stylesheet" href="css/main.css"></head><body class="is-preload">

			<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">My Blog</a>
				@if (Route::has('login'))
				<nav class="-mx-3 flex flex-1 justify-end">
					@auth
						<a
							href="{{ url('/dashboard') }}"
							class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
						>
							Dashboard
						</a>
					@else
						<a
							href="{{ route('login') }}"
							class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
						>
							Log in
						</a>

						@if (Route::has('register'))
							<a
								href="{{ route('register') }}"
								class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
							>
								Register
							</a>
						@endif
					@endauth
				</nav>
				@endif				
				<!--<nav>
					<a href="#menu">Menu</a>
				</nav>-->
			</header>
			<!-- Nav -->
			<!--				 
			<nav id="menu">			
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav>
			-->
			<!-- Banner -->
			 <section id="banner"><div class="inner">
					<h1>Welcome</h1>
					<p>This is a blog for couch enjoyer.</p>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>
			<!-- Highlights -->

			@foreach($posts as $post)
			<div class="inner" style="margin-top: 30px; padding-top: 50px; border-top:2px solid red; border-bottom:2px solid red;">
				<header class="special"><h2>{{ $post->Title}}</h2>
				<h4>{{ $post->Subtitle}}</h4>
				<p style="text-align: right;">{{ $post->CreatedDate}}</p>
				<div class="highlights">
					<div class="contents" style="border-right:1px solid red;">
					{{ $post->BriefContent}}
					</div>	
					<div class="contents">
					{{ $post->FullContent}}
					</div>	
				</div>				
			</div>
			<br/>
			@endforeach			

			<!-- CTA --><section id="cta" class="wrapper"><div class="inner">
					<h2>Help me fund my new couch</h2>
					<p>You can help me get a new couch by buying a Diet Mountain Dew under my code: mountaindew.com/buy?code=jdvance</p>
				</div>
			</section>

            <!-- Footer -->        
            <footer id="footer"><div class="inner">
					<div class="content">
						<section><h3>Accumsan montes viverra</h3>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
						</section><section><h4>Sem turpis amet semper</h4>
							<ul class="alt"><li><a href="#">Dolor pulvinar sed etiam.</a></li>
								<li><a href="#">Etiam vel lorem sed amet.</a></li>
								<li><a href="#">Felis enim feugiat viverra.</a></li>
								<li><a href="#">Dolor pulvinar magna etiam.</a></li>
							</ul></section><section><h4>Magna sed ipsum</h4>
							<ul class="plain"><li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul></section></div>
				</div>
			</footer><div id="copyright " class="copyright">
			Design by <a href="https://templated.co/">TEMPLATED</a>.
		</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script><script src="js/browser.min.js"></script><script src="js/breakpoints.min.js"></script><script src="js/util.js"></script><script src="js/main.js"></script></body></html>
