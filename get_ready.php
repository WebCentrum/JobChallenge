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
	
	<div class="site_header h_max img_4">
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
						<li class="active"><a href="/pro_uchazece.php">Uchazeč</a></li>
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
					<h1 class="title primary">Konference GetReady</h1>
					<h2 class="subtitle">
						20. 10. 2016, Kino Scala, Brno
					</p>
					
					<ul class="buttons">
						<li>
							
							<!-- POPUP REDIRECT INFO -->
							<div class="register_popup_box event_popup_open popup_use_content">
								<a class="primary popup_hide">Zaregistrovat se</a>
								<div class="ui_popup_content">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. In odio lorem, accumsan vel massa non, efficitur consequat odio. Nunc blandit commodo nisi vitae imperdiet.
									</p>
									<br />
									<div class="more">
										<div>
											<a href="http://google.com" class="button primary">Pokračovat</a>
										</div>
										<div>
											<a class="close">Zavřít</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a class="secondary smooth" href="#more">Více informací</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="numbers">
				WIP
			</div>
		</div>
	</div>
	
	
	<div class="area_basic_info">
		<div class="container">
			<a class="anchor" id="more"></a>
			<h2>
				Získejte raketový vstup na pracovní trh!
			</h2>
			<div class="texts nospace">
				<div class="row expanded">
					<div class="small-12 medium-12 large-6 columns texts">
						<h3>Kdy se konference GetReady koná?</h3>
						<p>
							Konference GetReady 2016 proběhne <strong>9. října 2016</strong>. 
							Akce začíná v 10:00 a potrvá až do odpoledních hodin.
						</p>
						
						<h3>Kam mám dorazit?</h3>
						<p>
							Konference GetReady se koná v <strong>univerzitním kině Scala na Moravském náměstí v Brně</strong>.
						</p>
						
						<h3>Jaká je cena vstupného?</h3>
						<p>
							Vstupenka na konferenci GetReady stojí <strong>149 Kč</strong>.
						</p>
						
					</div>
					<div class="small-12 medium-12 large-6 columns texts">
						<h3>Pro koho je konference určena?</h3>
						<p>
							Konference je pro všechny studenty a absolventy Masarykovy univerzity, 
							Mendelovy univerzity v Brně a Vysokého učení technického v Brně.
						</p>
						
						<h3>Proč bych měl na konferenci přijít?</h3>
						<p>
							<strong>Cílem konference je připravit vás na veletrh JobChallenge 2015</strong> tak, 
							abyste se před zaměstnavateli ukázali v tom nejlepším světle. Znalosti, 
							které na ní získáte, ovšem využije každý, kdo kdy musí vstoupit na pracovní 
							trh – ať už bude pracovat ve státní správě, veřejném sektoru, podnikat, 
							nebo se živit jako freelancer.
						</p>
					</div>
				</div>
			</div>
			<div class="more">
				<!-- POPUP REDIRECT INFO -->
				<div class="register_popup_box event_popup_open popup_use_content">
					<button class="button primary popup_hide">Zaregistrovat se</button>
					<div class="ui_popup_content">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. In odio lorem, accumsan vel massa non, efficitur consequat odio. Nunc blandit commodo nisi vitae imperdiet.
						</p>
						<br />
						<div class="more">
							<div>
								<a href="http://google.com" class="button primary">Pokračovat</a>
							</div>
							<div>
								<a class="close">Zavřít</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="area_basic_info">
		<div class="container">
			<h2>
				Hlavní program
			</h2>
			<div class="ui_timetable simple">
				<div class="item">
					<time>9:30</time>
					<h3>
						Suspendisse commodo quam a turpis dictum malesuada
					</h3>
					<p>
						Trh práce se vyvíjí a mění stejně rychle jako informační technologie. Je těžké držet s ním krok. Veletrh práce vám to usnadní. Na přednášce se dozvíte, proč je výhodné na veletrh nejenom zajít, ale hlavně jak se na něj připravit. Nad čím se zamyslet, než si začnete vybírat firmy, které chcete oslovit, jak si dohledat důležité informace a jak se na veletrhu pohybovat efektivně.
					</p>
					<div>
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
				<div class="item">
					<time>9:30</time>
					<h3>
						Suspendisse commodo quam a turpis dictum malesuada
					</h3>
					<p>
						Trh práce se vyvíjí a mění stejně rychle jako informační technologie. Je těžké držet s ním krok. Veletrh práce vám to usnadní. Na přednášce se dozvíte, proč je výhodné na veletrh nejenom zajít, ale hlavně jak se na něj připravit. Nad čím se zamyslet, než si začnete vybírat firmy, které chcete oslovit, jak si dohledat důležité informace a jak se na veletrhu pohybovat efektivně.
					</p>
				</div>
				<div class="item">
					<time>9:30</time>
					<h3>
						Suspendisse commodo quam a turpis dictum malesuada
					</h3>
					<p>
						Trh práce se vyvíjí a mění stejně rychle jako informační technologie. Je těžké držet s ním krok. Veletrh práce vám to usnadní. Na přednášce se dozvíte, proč je výhodné na veletrh nejenom zajít, ale hlavně jak se na něj připravit. Nad čím se zamyslet, než si začnete vybírat firmy, které chcete oslovit, jak si dohledat důležité informace a jak se na veletrhu pohybovat efektivně.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="area_basic_info">
		<div class="container">
			<div class="texts nospace">
				<div class="row expanded">
					<div class="small-12 medium-12 large-6 columns">
						<h2>
							Doprovodný program
						</h2>
						<h3>10:00 - 13:00 Pohovor nanečisto</h3>
						<p>
							Konference GetReady 2016 proběhne <strong>9. října 2016</strong>. 
							Akce začíná v 10:00 a potrvá až do odpoledních hodin.
						</p>
						
						<h3>0:00 - 13:00 Profesionální fotka do CV</h3>
						<p>
							Konference GetReady se koná v <strong>univerzitním kině Scala na Moravském náměstí v Brně</strong>.
						</p>
						
						
						
					</div>
					<div class="small-12 medium-12 large-6 columns">
						<h2>
							Bonusový e-mailový kurz
						</h2>
						
						<p>
							Teorie není praxe. Proto na konferenci navazuje bezplatný e-mailingový kurz, který vám pomůže aplikovat všechny poznatky získané z přednášek.
						</p>
						<p>
							E-mailingový kurz trvá 3 týdny. Čeká vás cca 7 e-mailů, v nichž budou shrnuty nejdůležitější poznatky z konference, stejně jako úkoly, které vám pomůžou s aktivní přípravou na veletrh.
						</p>
						<p>
							Díky e-mailingovému kurzu se hlouběji zamyslíte nad svojí pracovní budoucností, připravíte si podklady pro sebeprezentaci  a vytvoříte si plán, koho a jak na veletrhu oslovit.
						</p>
					</div>
				</div>
			</div>
			<div class="more">
				<!-- POPUP REDIRECT INFO -->
				<div class="register_popup_box event_popup_open popup_use_content">
					<button class="button primary popup_hide">Zaregistrovat se</button>
					<div class="ui_popup_content">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. In odio lorem, accumsan vel massa non, efficitur consequat odio. Nunc blandit commodo nisi vitae imperdiet.
						</p>
						<br />
						<div class="more">
							<div>
								<a href="http://google.com" class="button primary">Pokračovat</a>
							</div>
							<div>
								<a class="close">Zavřít</a>
							</div>
						</div>
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