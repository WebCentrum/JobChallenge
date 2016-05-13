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
			<div class="fixed" data-0="color: inherit;" data-350="color: inherit;">
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
								<li class="active"><a href="/registrace_uchazece.php">Jsem uchazeč</a></li>
								<li><a href="/registrace_vystavovatele.php">Jsem vystavovatel</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- TITLE, HEADLINE, BUTTONS -->
			<div class="content simple">
				<div class="container">
					<h1 class="title primary">Registrace vystavovatele</h1>
				</div>
			</div>
			<div class="form_box">
				<div class="inside ui_form">
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<p>
								* hvězdičkou jsou označeny povinné údaje
							</p>
						</div>
					</div>
					<h2>Přihlašovací údaje</h2>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Login</span>
								<input type="text" placeholder="Zadejte svoje přihlašovací jméno" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-6 large-6 columns">
							<label>
								<span class="ui_label">Heslo</span>
								<input type="password" placeholder="Zadejte své heslo" />
							</label>
						</div>
						<div class="small-12 medium-6 large-6 columns">
							<label>
								<span class="ui_label">Potvrzení hesla</span>
								<input type="password" placeholder="Potvrďte heslo" />
							</label>
						</div>
					</div>
					<h2>Údaje o firmě</h2>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Název firmy</span>
								<input type="text" placeholder="Zadejte název firmy" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">E-mail</span>
								<input type="text" placeholder="Zadejte firemní email" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Telefon</span>
								<input type="text" placeholder="Zadejte firemní telefon" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-6 large-6 columns">
							<label>
								<span class="ui_label">IČ</span>
								<input type="text" placeholder="Zadejte IČ" />
							</label>
						</div>
						<div class="small-12 medium-6 large-6 columns">
							<label>
								<span class="ui_label">DIČ</span>
								<input type="text" placeholder="Zadejte DIČ" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Bankovní spojení</span>
								<input type="text" placeholder="Zadejte číslo účtu" />
							</label>
						</div>
					</div>
					<h2>Korespondenční adresa</h2>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Ulice, č.p.</span>
								<input type="text" placeholder="Zadejte adresu" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-6 large-6 columns">
							<label>
								<span class="ui_label">Obec</span>
								<input type="text" placeholder="Zadejte název obce" />
							</label>
						</div>
						<div class="small-12 medium-6 large-6 columns">
							<label>
								<span class="ui_label">PSČ</span>
								<input type="text" placeholder="Zadejte PSČ" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Země</span>
								<input type="text" placeholder="Zadejte zemi" />
							</label>
						</div>
					</div>
					<h2>Sídlo</h2>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Ulice, č.p.</span>
								<input type="text" placeholder="Zadejte adresu" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-6 large-6 columns">
							<label>
								<span class="ui_label">Obec</span>
								<input type="text" placeholder="Zadejte název obce" />
							</label>
						</div>
						<div class="small-12 medium-6 large-6 columns">
							<label>
								<span class="ui_label">PSČ</span>
								<input type="text" placeholder="Zadejte PSČ" />
							</label>
						</div>
					</div>
					<h2>Kontaktní osoba pro pořadatele</h2>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Jméno</span>
								<input type="text" placeholder="Zadejte celé jméno" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">E-mail</span>
								<input type="text" placeholder="Zadejte email" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Telefon</span>
								<input type="text" placeholder="Zadejte telefon" />
							</label>
						</div>
					</div>
					<h2>Kontaktní osoba pro uchazeče</h2>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Jméno</span>
								<input type="text" placeholder="Zadejte celé jméno" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">E-mail</span>
								<input type="text" placeholder="Zadejte email" />
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label>
								<span class="ui_label">Telefon</span>
								<input type="text" placeholder="Zadejte telefon" />
							</label>
						</div>
					</div>
					<h2>Oblast působnosti firmy</h2>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<div class="ui_big_checklist">
								<label class="item">
									<input type="checkbox" name="test" value="1" />
									<span>Check</span>
								</label>
								<label class="item">
									<input type="checkbox" name="test" value="2" />
									<span class="c_green">Check</span>
								</label>
								<label class="item">
									<input type="checkbox" name="test" value="1" />
									<span class="c_blue">Check</span>
								</label>
								<label class="item">
									<input type="checkbox" name="test" value="2" />
									<span class="c_orange">Check</span>
								</label>
							</div>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<p>
								Kategorie slouží k lepší orientaci studentů v oblasti působení firmy. Zaškrtněte prosím ty obory, ze kterých nabíráte nejvíce uchazečů. Barvy budou sloužit k orientaci studentů a vystavovatelů jak na výstavní ploše, tak ve veletržním katalogu. Zvolte minimálně 1 kategorii a maximálně 4 kategorie/obory.
							</p>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<label class="ui_check">
								<input type="checkbox" />
								<span>Souhlasím se <a href="#">zpracováváním osobních údajů</a></span>
							</label>
						</div>
					</div>
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns">
							<div class="ui_actions center">
								<button class="button primary">Zaregistrovat</button>
							</div>
						</div>
					</div>
				</div>
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