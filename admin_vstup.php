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
					<h1 class="title primary">Administrace</h1>
				</div>
			</div>
			
			<div class="submenu_wrapper">
				<ul data-id="anchor_menu" class="links" data-smooth-scrolling="off" data-0="position:relative;" data-top="position:fixed;">
					<li><a href="/admin_vstup.php">Vložit CV</a></li>
					<li><a href="/admin_detail.php">Doprovodný program</a></li>
					<li><a href="#">Řečníci</a></li>
					<li><a href="#">Seznam vystavovatelů</a></li>
          <li><a href="#">Tipy a triky</a></li>
          <li><a href="#">Editace profilu</a></li>
				</ul>
			</div>
		</div>
	</div>

	
	<div class="site_subpage">
		<div class="container">
			<div class="ui_boxmenu">
				<div class="row expanded">
					<div class="small-12 medium-6 large-4 columns">
						<div class="item">
							<h3>Vložte svůj životopis</h3>
							<p>
								Vložte životopis do databáze veletrhu JobChallenge. Přístup k němu budou mít všichni přímí vystavovatelé ročníku 2016.
							</p>
							<div class="more">
								<a href="/admin_detail.php">Vložit CV</a>
							</div>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item">
							<h3>Doprovodný program</h3>
							<p>
								Přihlaste se na přednášky, workshopy a semináře doprovodného programu, který se koná po celý den konání a přímo na místě veletrhu.
							</p>
							<div class="more">
								<a href="/admin_detail.php">Zobrazit program</a>
							</div>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item">
							<h3>Řečníci</h3>
							<p>
								Seznamte se s řečníky, kteří vystoupí v rámci doprovodného programu v den veletrhu.
							</p>
							<div class="more">
								<a href="/admin_detail.php">Zobrazit řečníky</a>
							</div>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item">
							<h3>Seznam vystavovatelů</h3>
							<p>
								Podívejte se, jaké firmy se letos veletrhu účastní, jaké zaměstnance hledají a jaké na ně mají požadavky.
							</p>
							<div class="more">
								<a href="/admin_detail.php">Zobrazit vystavovatele</a>
							</div>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item">
							<h3>Tipy a triky</h3>
							<p>
								Přečtěte si, co byste měli vědět o veletrhu, jak se na něj připravit a jak se chovat na něm a po něm, abyste si z něj odnesli co nejvíc.
							</p>
							<div class="more">
								<a href="/admin_detail.php">Zobrazit tipy a triky</a>
							</div>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item">
							<h3>Editace profilu</h3>
							<p>
								Upravte své kontaktní a profilové údaje. Čím víc informací o svých kompetencích vyplníte, tím máte větší šanci, že zaujmete někoho z vystavovatelů.
							</p>
							<div class="more">
								<a href="/admin_detail.php">Upravit profil</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ui_actions center">
				<button class="button primary">Odhlásit se</button>
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