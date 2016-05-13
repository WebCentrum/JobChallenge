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
						<li class="active childs">
							<a href="/o_veletrhu.php">O veletrhu</a>
							<span class="toggle"></span>
							<ul>
								<li><a href="/o_veletrhu.php">Základní informace</a></li>
								<li><a href="/historie.php">Historie</a></li>
								<li><a href="/profily.php">Seznam vystavovatelů</a></li>
								<li><a href="#">Média</a></li>
								<li class="active"><a href="/kontakt.php">Kontakt</a></li>
							</ul>
						</li>
						<li><a href="/pro_uchazece.php">Uchazeč</a></li>
						<li><a href="/pro_vystavovatele.php">Vystavovatel</a></li>
						<li><a href="/program.php">Doprovodný program</a></li>
						<li><a href="/partneri.php">Partneři</a></li>
						<li><a href="/blog.php">Blog</a></li>
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
					<h1 class="title primary">Kontakt</h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="area_contacts">
		<div class="container">
			<div class="row expanded">
				<div class="small-12 medium-12 large-4 columns">
					<h2>Koordinátorka veletrhu</h2>
					<div class="ui_person_info">
						<div class="pic">
							<img src="https://placekitten.com/75/75" alt="">
						</div>
						<div class="text">
							<div class="name">Lorem Ipsum Dolor</div>
							<div class="contact">+420 776 084 980</div>
							<div class="contact"><a href="mailto:jitka.stenclova@jobch.cz">jitka.stenclova@jobch.cz</a></div>
						</div>
					</div>
				</div>
				<div class="small-12 medium-12 large-4 columns">
					<h2>Vystavovatelé a studentí</h2>
					<div class="ui_person_info">
						<div class="pic">
							<img src="https://placekitten.com/75/75" alt="">
						</div>
						<div class="text">
							<div class="name">Lorem Ipsum Dolor</div>
							<div class="contact">+420 776 084 980</div>
							<div class="contact"><a href="mailto:jitka.stenclova@jobch.cz">jitka.stenclova@jobch.cz</a></div>
						</div>
					</div>
				</div>
				<div class="small-12 medium-12 large-4 columns">
					<h2>Média</h2>
					<div class="ui_person_info">
						<div class="pic">
							<img src="https://placekitten.com/75/75" alt="">
						</div>
						<div class="text">
							<div class="name">Lorem Ipsum Dolor</div>
							<div class="contact">+420 776 084 980</div>
							<div class="contact"><a href="mailto:jitka.stenclova@jobch.cz">jitka.stenclova@jobch.cz</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row expanded">
				<div class="small-12 medium-12 large-4 columns">
					<h2>Korespondenční adresa</h2>
					<p>
						Kariérní centrum Masarykovy univerzity<br />
						Komenského nám. 2<br />
						602 00 Brno
					</p>
				</div>
				<div class="small-12 medium-12 large-4 columns">
					<h2>Jak se na veletrh dostanete</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1550.0712606777076!2d16.60225867041862!3d49.1967321030848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471294500191b06b%3A0xc4ab3bac920561ba!2sMasarykova+Univerzita!5e0!3m2!1scs!2scz!4v1463045263016" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="small-12 medium-12 large-4 columns">
					<h2>JobChallenge na Facebooku</h2>
					<div>
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.6";
						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-page" data-href="https://www.facebook.com/JobChallengeCZ" data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/JobChallengeCZ"><a href="https://www.facebook.com/JobChallengeCZ">Veletrh práce JobChallenge</a></blockquote></div></div>
					</div>
				</div>
				
				
			</div>
		</div>
		<div class="photo">
			<div class="inside">
				<h2>Místo konání veletrhu JobChallenge 2016</h2>
				<div class="address">
					<span>Fait Gallery v Brně</span><br />
					Ve Vaňkovce 2<br />
					602 00 Brno
				</div>
				<div class="copy">Foto: Martin Kacvinský</div>
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