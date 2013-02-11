<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>
		<meta charset="UTF-8" />
		
		<title>Vincent Simard—Montreal-based web developer</title>

		<meta name="author" content="Vincent Simard" />
		<meta name="description" content="The personal website of Vincent Simard" />
		<meta name="keywords" content="Vincent Simard, Vincent, Simard, Web developer, Web development, Montreal" />

		<link rel="stylesheet" href="css/reset.css" media="all" type="text/css" />
		<link rel="stylesheet" href="css/screen.css" media="screen" type="text/css" />
		<link rel="stylesheet" href="css/content.css" media="screen" type="text/css" />
		<!-- Should be using something like [if lte IE 7] but hey... it's my website. -->
		<!--[if IE]><link rel="stylesheet" href="css/screen-ie.css" media="screen" type="text/css" /><![endif]-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
	</head>
	<body id="page-content">
		<div id="document" class="container_12">
			<div id="ala-banner"></div>
			<header>
				<figure class="avatar">
					<img src="media/avatar-kung_pow_52x52.png" alt="*this is not my actual photo" class="frame_60x60" />
					<figcaption><img src="media/avatar-caption.png" alt="Not my actual photo" id="avatar-not" /></figcaption>
				</figure>
				<section class="branding">
					<h1><a href="/" title="vincentsimard.com">Vincent Simard</a></h1>
					<p class="status">Montreal-based web developer</p>
				</section><!-- End .branding -->
				<section class="contact">
					<p class="telephone">+1 514.725.9970</p>
					<p class="email"><a href="mailto:vincent@vincentsimard.com">vincent@vincentsimard.com</a></p>
				</section><!-- End .contact -->
				<nav>
					<ul class="mainnav">
						<li><a href="/" title="Home" class="active">Home</a></li>
						<li><a href="#" title="About">About</a></li>
						<li><a href="#" title="Portfolio">Portfolio</a></li>
						<li><a href="#" title="Sandbox">Sandbox</a></li>
						<li><a href="#" title="Contact">Contact</a></li>
					</ul>
					<ul class="lang">
						<li><a href="#" title="English"><abbr title="English">En</abbr></a></li>
						<li><a href="#" title="Français"><abbr title="Français">Fr</abbr></a></li>
					</ul>
				</nav><!-- End nav -->
			</header><!-- End header -->
			<section class="content">
				<section id="content-content" class="grid_6 suffix_1 alpha">
					<article>
						<header>
							<time datetime="2008-08-14">August 14th, 2010</time>
							<hgroup>
								<h2><a href="#" title="">Lorem ipsum</a></h2>
								<h3>Dolor sit amet <em>consectetur</em>. This is the latest post of the blog</h3>
							</hgroup>
						</header>
						<p>Proin erat libero, ullamcorper sodales pellentesque quis, gravida in nibh. Nullam eu diam massa. Sed dolor dolor, molestie at condimentum vel, ultricies eget diam.</p>
						<p>Aenean eget lacus leo.</p>
						<p>Quisque at magna nec turpis consequat placerat. Donec ut arcu gravida mi elementum malesuada. Duis augue metus, dapibus in ultricies non, hendrerit sit amet mi. Aliquam aliquet lorem et ante elementum tristique.</p>
						<p class="more"><a href="#" title="More">More</a></p>
						<footer>
							<p class="comments"><a href="#"><em>6</em> comments</a></p>
							<p class="tags">Filed in: <a href="#">Personal news</a>, <a href="#">web development</a>.</p>
						</footer>
					</article>
				</section>
				<section id="content-sidebar" class="grid_5 omega">
					<header>
						<hgroup>
							<h2><a href="#" title="Articles from the sandbox">Sandbox</a></h2>
							<h3>Excerpts from the <em>blog</em></h3>
						</hgroup>
						<p class="info">Web dev experiments <span class="ampersand">&</span> handpicked links</p>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at massa vel augue pharetra tincidunt ac ac orci. Nunc sit amet cursus odio. Quisque at magna nec turpis consequat placerat.</p>
					<ol>
						<li><a href="#">New website overview</a></li>
						<li><a href="#">CSS3 buttons & dialog boxes</a></li>
						<li><a href="#">Identity guidelines</a></li>
						<li><a href="#">jQuery tips and tricks</a></li>
						<li><a href="#">Mobile web development framework</a></li>
					</ol>
					<p>Curabitur vel arcu facilisis erat scelerisque placerat et scelerisque eros. Duis eu cursus libero.</p>
					<p class="more"><a href="#" title="More">More</a></p>
				</section>
			</section><!-- End #content -->
			<footer>
				<div class="endnav">
					<h2>Vincent Simard</h2>
					<nav>
						<ul class="mainnav">
							<li><a href="/" title="Home" class="active">Home</a></li>
							<li><a href="#" title="About">About</a></li>
							<li><a href="#" title="Portfolio">Portfolio</a></li>
							<li><a href="#" title="Sandbox">Sandbox</a></li>
							<li><a href="#" title="Contact">Contact</a></li>
						</ul>
					</nav><!-- End nav -->
					<section class="contact">
						<p class="telephone">+1 514.725.9970</p>
						<p class="email"><a href="mailto:vincent@vincentsimard.com">vincent@vincentsimard.com</a></p>
					</section><!-- End .contact -->
				</div>
				<div class="smallprint">
					<p>
						Designed with
						<?php
							$designedWith[1] = 'passion';
							$designedWith[2] = 'love';
							$designedWith[3] = 'care';
							echo $designedWith[mt_rand(1, count($designedWith))];
						?>
						<span class="ampersand">&</span>
						developed using Web Standards:
						<a href="http://validator.w3.org/check/referer">HTML5</a>,
						<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS3</a>,
						<a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=-1&amp;url1=http://<?php echo $HTTP_SERVER_VARS['SERVER_NAME'] ?><?php echo $HTTP_SERVER_VARS['SCRIPT_NAME'] ?>">508</a>,
						<a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=2&amp;url1=http://<?php echo $HTTP_SERVER_VARS['SERVER_NAME'] ?><?php echo $HTTP_SERVER_VARS['SCRIPT_NAME'] ?>">WAI</a>.
						<br />
						No
						<?php
							$harmed[1] = 'rounded borders';
							$harmed[2] = '&lt;marquee/&gt; tags';
							$harmed[3] = '&lt;blink/&gt; tags';
							$harmed[4] = 'gradients';
							$harmed[5] = 'reflective objects';
							$harmed[6] = 'stock photos';
							echo $harmed[mt_rand(1, count($harmed))];
						?>
						were harmed in the making of this website.
					</p>
					<p class="copyright">
						Copyright &copy; 2010 Vincent Simard. All rights reserved.
						<br />
						Stealing is bad—don't do it. <em>Hire me</em> instead!
					</p>
				</div>
			</footer>
			<p id="end"><em>The End.</em> Thank you for visiting.</p>
		</div><!-- End #document -->
	</body>
</html>