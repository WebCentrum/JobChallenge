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
						<li class="active"><a href="/partneri.php">Partneři</a></li>
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
					<h1 class="title primary">Partneři</h1>
				</div>
			</div>
		</div>
	</div>

	
	<div class="area_partners_all">
		<div class="container">
			<div class="item">
				<h2>
					Generální partner
				</h2>
				<div class="inside">
					<div>
						<img src="/content/subpage_partner_1.png" alt="" />
					</div>
				</div>
			</div>
			<div class="item">
				<h2>
					Partneři
				</h2>
				<div class="inside">
					<div>
						<img src="/content/subpage_partner_2.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_3.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_4.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_5.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_2.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_4.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_5.png" alt="" />
					</div>
				</div>
			</div>
			<div class="item">
				<h2>
					Generální mediální partner
				</h2>
				<div class="inside">
					<div>
						<img src="/content/subpage_partner_1.png" alt="" />
					</div>
				</div>
			</div>
			<div class="item">
				<h2>
					Mediální partneři
				</h2>
				<div class="inside">
					<div>
						<img src="/content/subpage_partner_2.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_3.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_5.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_2.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_3.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_4.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_5.png" alt="" />
					</div>
				</div>
			</div>
			
			<div class="item">
				<h2>
					Partneři soutěží
				</h2>
				<div class="inside">
					<div>
						<img src="/content/subpage_partner_2.png" alt="" />
					</div>
					<div>
						<img src="/content/subpage_partner_3.png" alt="" />
					</div>
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

</body>
</html>