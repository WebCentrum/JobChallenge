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
								<li class="active"><a href="/profily.php">Seznam vystavovatelů</a></li>
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
			<div class="content">
				<div class="container">
					<h1 class="title primary">Profily vystavovatelů</h1>
				</div>
			</div>

			<div class="submenu_wrapper">
				<ul data-backup-id="anchor_menu" class="links" data-smooth-scrolling="off" data-0="position:relative;" data-top="position:fixed;">
					<li><a href="">2016</a></li>
					<li><a href="">2015</a></li>
					<li><a href="">2014</a></li>
					<li><a href="">2013</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="area_profiles_filter">
		<div class="container">
			<form>
				<div class="inside">
					<label class="select">
					
						<select name="category">
							<option value="0" selected disabled>Vyberte sektor který vás zajímá</option>
							<option value="0">Vše</option>
							<option value="1">Lorem ipsum dolor</option>
							<option value="2">Lorem ipsum dolor</option>
						</select>
					</label>
					<button type="submit">
						Filtrovat
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<div class="area_profiles_content">
		<div class="container">
			<h2>Vystavující vystavovatelé</h2>
			<div class="inside">
				<div class="row expanded">
					<div class="small-12 medium-6 large-3 columns item">
						<a href="/profil_vystavovatele.php">
							<div class="logo">
								<div>
									<img src="/content/subpage_partner_1.png" />
								</div>
							</div>
							<div class="more">
								<h3 class="title">Honeywell</h3>
								<div class="ui_category small">
									<div class="c_fin">FIN</div>
									<div class="c_chem">CHEM</div>
									<div class="c_it">IR</div>
									<div class="c_hr">HR</div>
									<div class="c_obch">OBCH</div>
									<div class="c_por">POR</div>
									<div class="c_prav">PRAV</div>
									<div class="c_stav">STAV</div>
									<div class="c_stro">STRO</div>
									<div class="c_tech">TECH</div>
									<div class="c_jaz">JAZ</div>
									<div class="c_serv">SERV</div>
									<div class="c_zem">ZEM</div>
								</div>
							</div>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns item">
						<a href="/profil_vystavovatele.php">
							<div class="logo">
								<div>
									<img src="/content/subpage_partner_1.png" />
								</div>
							</div>
							<div class="more">
								<h3 class="title">Honeywell</h3>
								<div class="ui_category small">
									<div class="c_fin">FIN</div>
									<div class="c_chem">CHEM</div>
									<div class="c_it">IR</div>
									<div class="c_hr">HR</div>
									<div class="c_obch">OBCH</div>
									<div class="c_por">POR</div>
									<div class="c_prav">PRAV</div>
									<div class="c_stav">STAV</div>
									<div class="c_stro">STRO</div>
									<div class="c_tech">TECH</div>
									<div class="c_jaz">JAZ</div>
									<div class="c_serv">SERV</div>
									<div class="c_zem">ZEM</div>
								</div>
							</div>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns item">
						<a href="/profil_vystavovatele.php">
							<div class="logo">
								<div>
									<img src="/content/subpage_partner_1.png" />
								</div>
							</div>
							<div class="more">
								<h3 class="title">Honeywell</h3>
								<div class="ui_category small">
									<div class="c_fin">FIN</div>
									<div class="c_chem">CHEM</div>
									<div class="c_it">IR</div>
									<div class="c_hr">HR</div>
									<div class="c_obch">OBCH</div>
									<div class="c_por">POR</div>
									<div class="c_prav">PRAV</div>
									<div class="c_stav">STAV</div>
									<div class="c_stro">STRO</div>
									<div class="c_tech">TECH</div>
									<div class="c_jaz">JAZ</div>
									<div class="c_serv">SERV</div>
									<div class="c_zem">ZEM</div>
								</div>
							</div>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns item">
						<a href="/profil_vystavovatele.php">
							<div class="logo">
								<div>
									<img src="/content/subpage_partner_1.png" />
								</div>
							</div>
							<div class="more">
								<h3 class="title">Honeywell</h3>
								<div class="ui_category small">
									<div class="c_fin">FIN</div>
									<div class="c_chem">CHEM</div>
									<div class="c_it">IR</div>
									<div class="c_hr">HR</div>
									<div class="c_obch">OBCH</div>
									<div class="c_por">POR</div>
									<div class="c_prav">PRAV</div>
									<div class="c_stav">STAV</div>
									<div class="c_stro">STRO</div>
									<div class="c_tech">TECH</div>
									<div class="c_jaz">JAZ</div>
									<div class="c_serv">SERV</div>
									<div class="c_zem">ZEM</div>
								</div>
							</div>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="area_profiles_content">
		<div class="container">
			<h2>Přímí vystavovatelé</h2>
			<div class="inside">
				<div class="row expanded">
					<div class="small-12 medium-6 large-3 columns item">
						<a href="/profil_vystavovatele.php">
							<div class="logo">
								<div>
									<img src="/content/subpage_partner_1.png" />
								</div>
							</div>
							<div class="more">
								<h3 class="title">Honeywell</h3>
								<div class="ui_category small">
									<div class="c_fin">FIN</div>
									<div class="c_chem">CHEM</div>
									<div class="c_it">IR</div>
									<div class="c_hr">HR</div>
									<div class="c_obch">OBCH</div>
									<div class="c_por">POR</div>
									<div class="c_prav">PRAV</div>
									<div class="c_stav">STAV</div>
									<div class="c_stro">STRO</div>
									<div class="c_tech">TECH</div>
									<div class="c_jaz">JAZ</div>
									<div class="c_serv">SERV</div>
									<div class="c_zem">ZEM</div>
								</div>
							</div>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns item">
						<a href="/profil_vystavovatele.php">
							<div class="logo">
								<div>
									<img src="/content/subpage_partner_1.png" />
								</div>
							</div>
							<div class="more">
								<h3 class="title">Honeywell</h3>
								<div class="ui_category small">
									<div class="c_fin">FIN</div>
									<div class="c_chem">CHEM</div>
									<div class="c_it">IR</div>
									<div class="c_hr">HR</div>
									<div class="c_obch">OBCH</div>
									<div class="c_por">POR</div>
									<div class="c_prav">PRAV</div>
									<div class="c_stav">STAV</div>
									<div class="c_stro">STRO</div>
									<div class="c_tech">TECH</div>
									<div class="c_jaz">JAZ</div>
									<div class="c_serv">SERV</div>
									<div class="c_zem">ZEM</div>
								</div>
							</div>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns item">
						<a href="/profil_vystavovatele.php">
							<div class="logo">
								<div>
									<img src="/content/subpage_partner_1.png" />
								</div>
							</div>
							<div class="more">
								<h3 class="title">Honeywell</h3>
								<div class="ui_category small">
									<div class="c_fin">FIN</div>
									<div class="c_chem">CHEM</div>
									<div class="c_it">IR</div>
									<div class="c_hr">HR</div>
									<div class="c_obch">OBCH</div>
									<div class="c_por">POR</div>
									<div class="c_prav">PRAV</div>
									<div class="c_stav">STAV</div>
									<div class="c_stro">STRO</div>
									<div class="c_tech">TECH</div>
									<div class="c_jaz">JAZ</div>
									<div class="c_serv">SERV</div>
									<div class="c_zem">ZEM</div>
								</div>
							</div>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns item">
						<a href="/profil_vystavovatele.php">
							<div class="logo">
								<div>
									<img src="/content/subpage_partner_1.png" />
								</div>
							</div>
							<div class="more">
								<h3 class="title">Honeywell</h3>
								<div class="ui_category small">
									<div class="c_fin">FIN</div>
									<div class="c_chem">CHEM</div>
									<div class="c_it">IR</div>
									<div class="c_hr">HR</div>
									<div class="c_obch">OBCH</div>
									<div class="c_por">POR</div>
									<div class="c_prav">PRAV</div>
									<div class="c_stav">STAV</div>
									<div class="c_stro">STRO</div>
									<div class="c_tech">TECH</div>
									<div class="c_jaz">JAZ</div>
									<div class="c_serv">SERV</div>
									<div class="c_zem">ZEM</div>
								</div>
							</div>
						</a>
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
<script src="/js/jquery.anchormenu.js"></script>
	
</body>
</html>