<?php

error_reporting(0);
ini_set('display_errors', 'Off');
include('header.php');

?>
<body>

<!-- 
	POPUP
	- every element with ".event_popup_open" will open popup on click
	- popup can be opened by addind ".opened" class to ".ui_popup_overlay"
 -->
<div class="ui_popup_overlay">
	<div class="window">
	</div>
</div>
<!-- POPUP END -->
	
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
						<li class="active"><a href="/program.php">Doprovodný program</a></li>
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
					<h1 class="title primary">Lorem ipsum dolor sit amed</h1>
				</div>
			</div>

		</div>
	</div>


	<div class="area_program_detail">
		<div class="container">
			<div class="detail">
				<div class="row expanded">
					<div class="small-12 medium-12 large-8 columns">
						<h2>O workshopu</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec ornare nibh. Mauris non varius metus. Proin vel orci vel tortor gravida dictum. Mauris odio quam, ultricies maximus massa vitae, fermentum pulvinar dui. Morbi convallis justo eu ipsum porta laoreet.
						</p>
						<p>
							Donec aliquet nulla vel mauris feugiat gravida. Sed semper pharetra mollis. Curabitur consectetur efficitur sapien a sagittis. Phasellus eu lacinia augue, et aliquam arcu. Sed lorem dolor, suscipit ut eros 
						</p>
						<div class="program_info_reg">
							<div class="info">
								<h3>Panel zaměstnání</h3>
								<div>
									<strong>9:30-10:30</strong>
								</div>
							</div>
							<div class="reg">
								<div class="status">5 volných míst</div>
								<a href="#" class="button primary">Přihlásit na workshop</a>
							</div>
							
						</div>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<h2>Řečníci</h2>
						<div class="ui_person_info event_popup_open popup_use_content">
							<div class="pic small">
								<img src="https://placekitten.com/75/75" alt="">
							</div>
							<div class="text">
								<div class="name">Lorem Ipsum Dolor 1</div>
							</div>
							<p class="person_info hidden_content">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus dolor vitae magna euismod hendrerit. In hac habitasse platea dictumst.
							</p>
						</div>
						<div class="ui_person_info event_popup_open popup_use_content">
							<div class="pic small">
								<img src="https://placekitten.com/75/75" alt="">
							</div>
							<div class="text">
								<div class="name">Lorem Ipsum Dolor 2</div>
							</div>
							<p class="person_info hidden_content">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus dolor vitae magna euismod hendrerit. In hac habitasse platea dictumst.
							</p>
						</div>
					</div>
				</div>
				<div class="ui_back">
					<a href="#" class="back">Zpět na program</a>
				</div>
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