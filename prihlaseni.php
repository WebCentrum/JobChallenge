<?php

error_reporting(0);
ini_set('display_errors', 'Off');
include('header.php');

?>
<body>
<div id="skrollr-body">
	
	
	<div class="site_header h_max">
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
						<li class="register childs active">
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
					<h1 class="title primary">Přihlášení do administrace</h1>
					<p class="headline small">
						V případě, že ještě nemáte účet, zaregistrujte se jako <a href="/registrace_vystavovatele.php">vystavovatel</a> nebo <a href="/registrace_uchazece.php">uchazeč</a>.
						Pozor, loňské registrace jsou neplatné, na veletrh je třeba se registrovat každý rok.
					</p>
				</div>
			</div>
			
			<div class="form_box">
				<div class="inside ui_form">
					
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Login</span>
								<input type="text" placeholder="Zadejte svoje přihlašovací jméno" />
							</label>
						</div>
					</div>
					
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Heslo</span>
								<input type="password" placeholder="Zadejte heslo" />
							</label>
						</div>
					</div>
					
					<div class="row expanded">
						<div class="small-12 medium-6 large-6 columns">
							<label class="ui_check login">
								<input type="checkbox" />
								<span>Zůstat přihlášen</span>
							</label>
						</div>
						<div class="small-12 medium-6 large-6 columns" style="text-align:right;">
							<button class="button primary">Přihlásit se</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="lost_pass">
				<a href="#">Zapomenuté heslo</a>
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