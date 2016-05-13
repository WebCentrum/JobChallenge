<?php

error_reporting(0);
ini_set('display_errors', 'Off');
include('header.php');

?>
<body>
<div id="skrollr-body">
	
	
	<div class="site_header h_max img_2">
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
						<li class="active"><a href="/pro_vystavovatele.php">Vystavovatel</a></li>
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
					<h1 class="title primary">Najděte mladé talenty z VŠ, které vaše firma potřebuje</h1>
					<p class="headline">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
					</p>
					
					<ul class="buttons">
						<li>
							<a class="primary" href="#">Zaregistrovat zdarma</a>
						</li>
						<li>
							<a class="secondary" href="#">Administrace</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="submenu_wrapper">
				<ul id="anchor_menu" class="links" data-smooth-scrolling="off" data-0="position:relative;" data-top="position:fixed;">
					<li><a href="#faq">Nejčastějsí dotazy</a></li>
					<li><a href="#exhibitors">Přihlášení vystavovatelé</a></li>
					<li><a href="#challengebook">Challenge Book</a></li>
					<li><a class="admin" href="">Administrace vystavovatele</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="area_partners">
		<div class="container">
			<div class="partners">
				<div class="main">
					<div class="partners_main_inside">
						<div class="item">
							<h3>Generální partner</h3>
							<div class="logos">
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_kb_color.png" alt="" />
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<h3>Generální<br />mediální partner</h3>
							<div class="logos">
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_adamgallery_color.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<script>
					$(document).ready(function(){
						$('.partners_main_inside').slick({
							slidesToShow: 1,
							slidesToScroll: 1,
							dots: false,
							prevArrow: false,
							nextArrow: false,
							autoplay: true,
							autoplaySpeed: 5500
						});
					});
				</script>
				
				<div class="others">
					
					<div class="item">
						<h3>Partneři</h3>
						<div class="logos">
							<div class="partners_others_inside">
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_embedit_color.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_adamgallery_color.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_honeywell_color.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_kpmg_color.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_adamgallery_color.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_honeywell_color.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_embedit_color.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_kpmg_color.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function(){
						$('.partners_others_inside').slick({
							dotse: false,
							slidesToShow: 4,
							slidesToScroll: 1,
							dots: false,
							prevArrow: false,
							nextArrow: false,
							autoplay: true,
							autoplaySpeed: 3500,
							responsive: [
								{
								breakpoint: 900,
									settings: {
										slidesToShow: 3,
										slidesToScroll: 3,
										infinite: true,
										dots: true
									}
								},
								{
									breakpoint: 600,
									settings: {
										slidesToShow: 2,
										slidesToScroll: 2
									}
								},
								{
									breakpoint: 480,
									settings: {
										slidesToShow: 1,
										slidesToScroll: 1
									}
								}

							]
						});
					});
				</script>
			</div>
			
		</div>
	</div>
	
	
	<div class="area_features">
		<div class="container">
			<h2>
				Proč se zúčastnit veletrhu JobChallenge 2016
			</h2>
			
			<div class="boxes">
				<div class="row expanded">
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_11">
							<h3>Poznejte zaměstnavatele</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_12">
							<h3>Navažte první kontakty</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_13">
							<h3>Navštivte skvělé přednášky</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_14">
							<h3>Vylaďte svůj životopis</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_15">
							<h3>Dopřejte si relax v chill zóně</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_16">
							<h3>Prožijte párty snů</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="register">
				<div>
					<a href="#" class="button">
						Zaregistrovat firmu
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="area_basic_info">
		<div class="container">
			<h2>
				Nejčastějí kladené dotazy
			</h2>
			<div class="questions">
				<a class="anchor" id="faq"></a>
				<div class="item">
					<h3>
						Co mi veletrh přinese?
					</h3>
					<div class="text">
						<div>
							<p>
								Máte možnost osobně oslovit talentované vysokoškolské studenty a absolventy v Brně přímo z těch oborů, které vaše firma potřebuje. Základní informace a fakta najdete v tomto prospektu.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<h3>
						Jakými způsoby se může vystavovatel na veletrhu prezentovat?
					</h3>
					<div class="text">
						<div>
							<p>
								Máte možnost osobně oslovit talentované vysokoškolské studenty a absolventy v Brně přímo z těch oborů, které vaše firma potřebuje. Základní informace a fakta najdete v tomto prospektu.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<h3>
						Co bude pro vystavovatele při konání veletrhu zajištěno?
					</h3>
					<div class="text">
						<div>
							<p>
								Máte možnost osobně oslovit talentované vysokoškolské studenty a absolventy v Brně přímo z těch oborů, které vaše firma potřebuje. Základní informace a fakta najdete v tomto prospektu.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<h3>
						Může se vystavovatel zapojit do doprovodného programu?
					</h3>
					<div class="text">
						<div>
							<p>
								Máte možnost osobně oslovit talentované vysokoškolské studenty a absolventy v Brně přímo z těch oborů, které vaše firma potřebuje. Základní informace a fakta najdete v tomto prospektu.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<h3>
						Mohu kontaktovat návštěvníky a prohlédnout si jejich životopisy ještě před veletrhem?
					</h3>
					<div class="text">
						<div>
							<p>
								Máte možnost osobně oslovit talentované vysokoškolské studenty a absolventy v Brně přímo z těch oborů, které vaše firma potřebuje. Základní informace a fakta najdete v tomto prospektu.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<h3>
						Jak se může firma na veletrh přihlásit?
					</h3>
					<div class="text">
						<div>
							<p>
								Máte možnost osobně oslovit talentované vysokoškolské studenty a absolventy v Brně přímo z těch oborů, které vaše firma potřebuje. Základní informace a fakta najdete v tomto prospektu.
							</p>
						</div>
					</div>
				</div>
				<script>
					$(".questions .item > .text").each(function(){
						$(this).css("height","0");
					});

					$(".questions .item > h3").click(function () {
						var item = $(this).parent();
						var text = $(this).parent().children('.text');
						if(item.hasClass('opened')){
							text.animate({height: 0}, 300);
							item.removeClass('opened');
						}
						else {
							var height = text.children('div').outerHeight();
							text.animate({height: height}, 300);
							item.addClass('opened');
							$(window).resize(function () {
								var height = text.children('div').outerHeight();
								text.css("height", height);
							});
						}
					});
					
				</script>
				
			</div>
		</div>
	</div>
	
	
	<div class="area_top_exhibitors">
		<div class="container">
			<a class="anchor" id="exhibitors"></a>
			<h2>
				Přihlášení vystavovateké
			</h2>
			<p>
				Podívejte se, které firmy jsou již přihlášeny na letošní ročník JobChallenge
			</p>
			<script>
			$(function(){
				$("#exhibitors_slideshow").slidesjs({
					width: "100%",
					height: "100%",
					play: {
						active: true,
						effect: "fade",
						interval: 4000,
						auto: true,
						swap: false,
						pauseOnHover: false,
						restartDelay: 4000
					}
				});
			});
			</script>
			<!---- SLIDESHOW CONTAINER ---->
			<div class="boxes" id="exhibitors_slideshow">
				<!----SLIDE---->
				<div class="row expanded">
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_1.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_2.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_3.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_4.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_1.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_3.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_4.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_1.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!----SLIDE---->
				<div class="row expanded">
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_2.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_1.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_2.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_3.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_2.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_4.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_1.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<!---- ITEM ---->
					<div class="small-12 medium-12 large-3 columns">
						<div class="item">
							<div class="inside">
								<div>
									<a href="/profil_vystavovatele.php"><img src="/content/exhibitor_2.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-------->
			</div>
			<!-------->
			<div class="more">
				<a href="#">
					Zobrazit seznam vystavovatelů
				</a>
			</div>
		</div>
	</div>

	<div class="area_challenge_book">
		<div class="container">
			<a class="anchor" id="challengebook"></a>
			<h2>
				Oslovte zájemce pomocí Challenge Booku
			</h2>
			<div class="texts">
				<div class="row extended">
					<div class="small-12 medium-12 large-6 columns">
						<h3>Co je Challenge Book?</h3>
						<p>
							Challenge Book je <strong>katalog zaměstnavatelů pro studenty a absolventy 3 největších brněnských vysokých škol</strong>. Není šířen jenom na veletrhu, ale v průběhu celého akademického roku! 
						</p>
						<h3>Kde je Challenge Book distribuován?</h3>
						<p>
							Celkem <strong>5 000 výtisků</strong> je distribuováno na samotném veletrhu v listopadu 2016, dále na konferencích, kurzech a seminářích Masarykovy univerzity, Vysokého učení technického v Brně a Mendelovy univerzity v Brně a na zápisech magisterských studentů těchto škol v období listopad 2016 až říjen 2017.
						</p>
						<h3>Co inzerent získá?</h3>
						<ul>
							<li>
								<a href="#">dvoustránkovou prezentaci v katalogu</a> (textovou a grafickou část)
							</li>
							<li>
								<a href="#">profil na webu</a> veletrhu JobChallenge
							</li>
						</ul>
					</div>
					<div class="small-12 medium-12 large-6 columns">
						<h3>Jak se stát součástí Challenge Booku?</h3>
						<p>
							<strong>Nemusíte být vystavovatelem na veletrhu, abyste mohli být součástí Challenge Booku!</strong>
						</p>
						<p>
							Pokud máte <strong>zájem o inzerci</strong>, objednejte si ji <a href="#">zde</a>. 
							Pro další informace nás kontaktujte na <a href="mailto:info@jobch.cz">info@jobch.cz</a>.
						</p>
						<h3>Jak připravit svoji prezentaci do Challenge Booku?</h3>
						<p>
							Jedna strana v katalogu je <strong>tvořena textem, který vyplníte v administraci v sekci „Editace profilu“</strong>. 
							Text si můžete zkontrolovat i na webových stránkách, kde je publikován profil Vaší společnosti 
							(najdete ho v <a href="#">seznamu vystavovatelů</a>).
						</p>
						<p>
							Na druhé straně bude otištěn <strong>Váš inzerát formátu A5</strong>, který <strong>nahrajete opět v sekci „Editace profilu“</strong>. Zde jsou také uvedeny pokyny k technickému zpracování inzerátu. 
						</p>
					</div>
					
				</div>
				<div class="row extended book_preview">
					<div class="small-12 medium-12 larger-12 columns">
						<h3>Jak vypadal Challenge Book 2015/2016</h3>
						
					</div>
					
				</div>
			</div>
			<div class="more">
				<a href="http://google.com">
					Zaregistrovat firmu
				</a>
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
<script src="/js/carousel/slick.min.js"></script>
	
</body>
</html>