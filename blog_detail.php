<?php

error_reporting(0);
ini_set('display_errors', 'Off');
include('header.php');

?>
<body>
<div id="skrollr-body">
	
	
	<div class="site_header">
		<div class="inside fill">
			<!-- PLADEHOLDER FOR FIXED MENU -->
			<div class="menu_placeholder"></div>
			<!-- FIXED MENU -->
			<div class="fixed" data-0="color: inherit;" data-150="color: inherit;">
				<div class="inside">
					<a href="/" class="logo">
						<img src="/layout/img/logo.png" alt="JobChallenge" />
					</a>
					<a href="/" class="logo color">
						<img src="/layout/img/logo_color.png" alt="JobChallenge" />
					</a>
					<button class="hotdog" title="Menu"></button>
					<div class="langs">
						<a href="#CZ" class="active">CZ</a>
						<a href="#EN">EN</a>
					</div>
					<ul class="menu">
						<li class="childs">
							<a href="/o_veletrhu.php">O veletrhu</a>
							<span class="toggle"></span>
							<ul>
								<li><a href="/o_veletrhu.php">Základní informace</a></li>
								<li><a href="/historie.php">Historie</a></li>
								<li><a href="/profily.php">Seznam vystavovatelů</a></li>
								<li><a href="#">Média</a></li>
								<li><a href="/kontakt.php">Kontakt</a></li>
							</ul>
						</li>
						<li><a href="/pro_uchazece.php">Uchazeč</a></li>
						<li><a href="/pro_vystavovatele.php">Vystavovatel</a></li>
						<li><a href="/program.php">Doprovodný program</a></li>
						<li><a href="/partneri.php">Partneři</a></li>
						<li class="active"><a href="/blog.php">Blog</a></li>
						<li class="register childs">
							<a href="/prihlaseni.php">Registrace</a>
							<span class="toggle highlight"></span>
							<ul>
								<li><a href="/registrace_uchazece.php">Jsem uchazeč</a></li>
								<li><a href="/registrace_vystavovatele.php">Jsem vystavovatel</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			
			<!-- TITLE, HEADLINE, BUTTONS -->
			<div class="content simple">
				<div class="container">
					<h1 class="title primary">Lorem ipsum dolor sit amed blog title placeholder</h1>
					<div class="published">
						Publikováno 23. ledna 2016
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="area_blog">
		<div class="container">
			<div class="detail">
				<p>
					Proin elementum leo mauris, ac mollis mi suscipit ac. Morbi lacinia leo eget faucibus congue. Suspendisse viverra turpis nunc, non aliquam augue suscipit quis. Cras quam justo, vulputate ornare condimentum vitae, tristique vitae metus. Vivamus rutrum ante in porttitor porttitor
				</p>
				<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
				<p>
					Morbi id dolor nunc. Vivamus bibendum mattis tincidunt. Cras aliquet, ligula nec gravida lacinia, massa eros dapibus turpis, sed malesuada nisl eros vel tellus. Quisque tincidunt odio ut sollicitudin volutpat. Integer commodo iaculis lacus, vel mattis orci porta nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin ut nulla sem
				</p>
				<h2>Integer ac ligula luctus, eleifend sapien at, molestie nibh</h2>
				<p>
					Sed iaculis laoreet felis sit amet ullamcorper. Integer ac sem sed dolor ullamcorper maximus. Vestibulum aliquam vehicula ipsum eget blandit. Suspendisse vel malesuada diam. Proin et felis in urna pulvinar bibendum. Donec vestibulum ornare lacus, quis maximus libero auctor eget
				</p>
				<ul>
					<li>Donec a rhoncus sapien, sed congue mauris</li>
					<li>Nulla nec enim at nulla suscipit viverra. Phasellus vel commodo nunc. Cras consequat est ut erat ultrices venenatis</li>
					<li>In in velit vel ligula tempus fringilla non a magna. Cras sed quam suscipit, cursus velit et, accumsan libero</li>
					<li>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</li>
				</ul>
				<p>
					Cras maximus dui metus, ut aliquet metus posuere id. Maecenas congue dolor vel ex molestie, in tincidunt ligula ornare. Mauris eu enim suscipit, vulputate leo eget, tristique tellus. Vivamus commodo velit non leo volutpat, ut dictum eros pulvinar. Nulla scelerisque ipsum sed pulvinar vehicula.
				</p>
				<h3>Nam sodales, ante vitae iaculis pulvinar</h3>
				<p>
					Donec a rhoncus sapien, sed congue mauris. Nulla nec enim at nulla suscipit viverra. Phasellus vel commodo nunc. Cras consequat est ut erat ultrices venenatis. In in velit vel ligula tempus fringilla non a magna. Cras sed quam suscipit, cursus velit et, accumsan libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				</p>
				<h4>Maecenas dictum neque vel porta viverra</h4>
				<p>
					Cras eu dolor fermentum, egestas eros vel, mollis nisi. Vestibulum porta sapien ut libero rutrum, at tempor odio sagittis. Donec sed urna eu velit mollis congue. Quisque semper luctus nulla sed tristique. Praesent euismod, nunc vitae viverra dapibus, dolor tellus elementum nisi, eu tempus diam dui sit amet dolor. Aliquam pulvinar blandit dui eu mattis. Duis scelerisque purus leo, eget tincidunt augue semper at. Nunc pharetra, ligula quis porta gravida, ipsum tellus elementum elit, in scelerisque purus purus ultricies nisl.
				</p>
			</div>
			<div class="ui_back">
				<a href="#" class="back">Zpět na seznam článků</a>
			</div>
			<div class="facebook_comments">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.6";
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-comments" data-href="http://jobchallenge.4every1.cz/" data-width="100%" data-numposts="5"></div>
			</div>
		</div>
	</div>
	
	
	<div class="site_footer">
		<div class="container">
			<a class="logo">
				<img src="/layout/img/logo_color.png" alt="JobChallenge" />
			</a>
			<div class="organiser">
				<h2>Akci pořádají:</h2>
				<img src="/layout/img/footer_logos.jpg" alt="Pořadatelé akce JobChallenge" />
			</div>
			<div class="contact">
				<h2>Kontaktní osoba:</h2>
				<p>
					Bc. Veronika Čechová<br />
					M: +420 728 370 870<br />
					E: <a href="mailto:info@jobch.cz">info@jobch.cz</a>
				</p>
			</div>
		</div>
	</div>
	
</div>

<script type="text/javascript" src="/js/skrollr/skrollr.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		skrollr.init({          
            forceHeight: false,
			mobileCheck: function() {
				//hack - forces mobile version to be off
				return false;
			}
		});
	});
</script>
	
<script src="/js/jquery.header.js"></script>
<script src="/js/jquery.anchormenu.js"></script>
	
</body>
</html>