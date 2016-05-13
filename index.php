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
		<h2>Musím se registrovat?</h2>
		<p>
			Registrace na JobChallenge není povinná, my ji však 
			rozhodně doporučujeme! Je zdarma a přináší celou řadu výhod, 
			které pomohou nastartovat vaši kariéru.
		</p>
		<div class="more">
			<div>
				<a href="#registration_info" class="secondary more">Více informací o registraci</a>
			</div>
			<div>
				<button class="button primary">OK</button>
			</div>
		</div>
	</div>
	
</div>
<!-- POPUP END -->

<div id="skrollr-body">
	<div class="site_header h_max">
		<div class="slides" id="header_slides">
			<div class="hp_slide1"></div>
			<div class="hp_slide2"></div>
			<div class="hp_slide3"></div>
		</div>
		<script>
			$(function(){
				$("#header_slides").slidesjs({
					width: "100%",
					height: "100%",
					play: {
						active: true,
						effect: "fade",
						interval: 7000,
						auto: true,
						swap: false,
						pauseOnHover: false,
						restartDelay: 7000
					}
				});
			});
		</script>
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
			<div class="content">
				<div class="container">
					<h1 class="title primary">10. ročník veletrhu pracovních příležitostí JobChallenge 2016</h1>
					<h2 class="subtitle">9.11.2016 - Fait Gallery, Brno</h2>
					<ul class="buttons">
						<li>
							<a class="primary" href="#">Jsem uchazeč</a>
						</li>
						<li>
							<a class="secondary" href="#">Jsem vystavovatel</a>
						</li>
					</ul>
				</div>
			</div>
			
			<!-- PARTNERS -->
			
			
			<div class="partners">
				<div class="main">
					<div class="partners_main_inside">
						<div class="item">
							<h3>Generální partner</h3>
							<div class="logos">
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_kb.png" alt="" />
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<h3>Generální<br />mediální partner</h3>
							<div class="logos">
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_adam_gallery.png" alt="" />
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
										<img src="/content/partner_embedit.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_adam_gallery.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_honeywell.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_kpmg.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_adam_gallery.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_honeywell.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_embedit.png" alt="" />
									</div>
								</div>
								<div>
									<div class="logo_wrap">
										<img src="/content/partner_kpmg.png" alt="" />
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
				Nastartujte svou pracovní kariéru
			</h2>
			<p>
				JobChallenge umožňuje studentům a absolventům VŠ setkat se s atraktivními zaměstnavateli a zjistit, jakými všemi směry se může ubírat jejich budoucí kariéra
			</p>
			<div class="boxes">
				<div class="row expanded">
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_1">
							<h3>Poznejte zaměstnavatele</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_2">
							<h3>Navažte první kontakty</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_3">
							<h3>Navštivte skvělé přednášky</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_4">
							<h3>Vylaďte svůj životopis</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_5">
							<h3>Dopřejte si relax v chill zóně</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="item icon_6">
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
						Zaregistrovat zdarma
					</a>
				</div>
				<div>
					<a href="#" class="more event_popup_open">
						Musím se registrovat?
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="area_top_exhibitors">
		<div class="container">
			<h2>
				TOP vystavovatelé
			</h2>
			<p>
				Seznamte se s nejlepšími firmami současnosti a začněte budovat cenné kontakty již nyní!
			</p>
			<script>
			$(function(){
				$("#exhibitors").slidesjs({
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
			<div class="boxes" id="exhibitors">
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
	<div class="area_gallery">
		<div class="container">
			<h2>Zážitky z JobChallenge 2015</h2>
			<div class="photos">
				<div class="row expanded">
					<div class="small-12 medium-6 large-6 columns">
						<a class="photo video" href="https://www.youtube.com/watch?v=Zixs48RZU08" rel="lightbox[pack1]" style="background-image: url(https://i.ytimg.com/vi/Zixs48RZU08/maxresdefault.jpg);"></a>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<a class="photo" href="https://placekitten.com/500/600" rel="lightbox[pack1]" style="background-image: url(https://placekitten.com/500/600);"></a>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<a class="photo" href="https://placekitten.com/510/600" rel="lightbox[pack1]" style="background-image: url(https://placekitten.com/510/600);"></a>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<a class="photo" href="https://placekitten.com/520/600" rel="lightbox[pack1]" style="background-image: url(https://placekitten.com/520/600);"></a>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<a class="photo" href="https://placekitten.com/530/600" rel="lightbox[pack1]" style="background-image: url(https://placekitten.com/530/600);"></a>
					</div>
					<div class="small-12 medium-6 large-6 columns">
						<a class="photo" href="https://placekitten.com/650/650" rel="lightbox[pack1]" style="background-image: url(https://placekitten.com/650/650);"></a>
					</div>
				</div>
			</div>
			<div class="photos_hidden">
				<a href="https://placekitten.com/900/900" rel="lightbox[pack1]"></a>
				<a href="https://placekitten.com/1200/1200" rel="lightbox[pack1]"></a>
			</div>
				
		</div>
	</div>
	<div class="area_program">
		<div class="container">
			<h2>
				Nabitý doprovodný program
			</h2>
			<p>
				Unikátní série přednášek, seminářů a workshopů, které najdete pouze na JobChallenge!
			</p>
			<div class="boxes">
				<div class="row expanded">
					<div class="small-12 medium-12 large-4 columns">
						<div class="item">
							<div class="number">1</div>
							<h3>Panel praktických tipů</h3>
							<p>
								Aktuálním trendy ve výběrovém řízení a návody, které využijete při hledání práce
							</p>
						</div>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="item">
							<div class="number">2</div>
							<h3>Panel rozvoje</h3>
							<p>
								Šest dovedností, které jsou na trhu práce nejdůležitější - efektivní komunikace, projektové řízení a další
							</p>
						</div>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="item">
							<div class="number">3</div>
							<h3>Panel zaměstnání</h3>
							<p>
								 Setkání s HR manažery a personalisty , kteří prozradí jak probíhá přijímací řízení.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="more">
				<a href="#">
					Zobrazit kompletní program
				</a>
			</div>
		</div>
	</div>
	<div class="area_blog">
		<div class="container">
			<h2>
				Novinky z blogu
			</h2>
			<div class="articles">
				<div class="row expanded">
					<div class="small-12 medium-4 large-4 columns">
						<div class="item">
							<a href="#" class="image">
								<img src="https://placekitten.com/400/240" alt="" />
							</a>
							<h3>
								<a href="#">
									Hledáme posily do týmu pro veletrh JobChallenge 2016!
								</a>
							</h3>
							<p>
								Jste komunikativní, zodpovědní a pracovití? Máte smysl pro humor a týmového ducha? Potom se přidejte k nám a zapojte se...
							</p>
							<a href="#" class="more">
								Číst více
							</a>
						</div>
					</div>
					<div class="small-12 medium-4 large-4 columns">
						<div class="item">
							<a href="#" class="image">
								<img src="https://placekitten.com/400/240" alt="" />
							</a>
							<h3>
								<a href="#">
									Hledáme posily do týmu pro veletrh JobChallenge 2016!
								</a>
							</h3>
							<p>
								Jste komunikativní, zodpovědní a pracovití? Máte smysl pro humor a týmového ducha? Potom se přidejte k nám a zapojte se...
							</p>
							<a href="#" class="more">
								Číst více
							</a>
						</div>
					</div>
					<div class="small-12 medium-4 large-4 columns">
						<div class="item">
							<a href="#" class="image">
								<img src="https://placekitten.com/400/240" alt="" />
							</a>
							<h3>
								<a href="#">
									Hledáme posily do týmu pro veletrh JobChallenge 2016!
								</a>
							</h3>
							<p>
								Jste komunikativní, zodpovědní a pracovití? Máte smysl pro humor a týmového ducha? Potom se přidejte k nám a zapojte se...
							</p>
							<a href="#" class="more">
								Číst více
							</a>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		
	</div>
	<div class="area_afterparty">
		<div class="container">
			<div class="texts row expanded">
				<div class="small-12 medium-12 large-6 columns">
					<h2>Čeká vás party snů!</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore 
						magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
					</p>
					<div class="stats row">
						<div class="small-4 medium-4 large-4 columns">
							<div class="item">
								<span>5</span>
								kapel
							</div>
						</div>
						<div class="small-4 medium-4 large-4 columns">
							<div class="item">
								<span>3</span>
								pódia
							</div>
						</div>
						<div class="small-4 medium-4 large-4 columns">
							<div class="item">
								<span>10</span>
								soutěží
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class="area_reviews">
		<div class="container">
			<h2>
				Co říkají účastníci předchozích ročníků?
			</h2>
			<div class="boxes">
				<div class="row expanded">
					<div class="small-12 medium-12 large-4 columns">
						<div class="item">
							<p>
								“Velice se mi líbilo, jak na každém stánku byla barva oboru a také pásek na ruce, 
								díky němuž mě oslovilo hodně potenciálních zaměstnavatelů, především z firem, 
								do kterých mne ani nenapadlo se hlásit.”
							</p>
						</div>
						<div class="author">
							<div class="pic">
								<img src="https://placekitten.com/45/45" alt="" />
							</div>
							<div class="text">
								<div class="name">Lorem Ipsum Dolor</div>
								<div class="position">student IPSUM DOL-EM</div>
							</div>
						</div>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="item">
							<p>
								“Velice se mi líbilo, jak na každém stánku byla barva oboru a také pásek na ruce, 
								díky němuž mě oslovilo hodně potenciálních zaměstnavatelů, především z firem, 
								do kterých mne ani nenapadlo se hlásit.”
							</p>
						</div>
						<div class="author">
							<div class="pic">
								<img src="https://placekitten.com/45/45" alt="" />
							</div>
							<div class="text">
								<div class="name">Lorem Ipsum Dolor</div>
								<div class="position">student IPSUM DOL-EM</div>
							</div>
						</div>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="item">
							<p>
								 “Velice se mi líbilo, jak na každém stánku byla barva oboru a také pásek na ruce, 
								díky němuž mě oslovilo hodně potenciálních zaměstnavatelů, především z firem, 
								do kterých mne ani nenapadlo se hlásit.”
							</p>
						</div>
						<div class="author">
							<div class="pic">
								<img src="https://placekitten.com/45/45" alt="" />
							</div>
							<div class="text">
								<div class="name">Lorem Ipsum Dolor</div>
								<div class="position">student IPSUM DOL-EM</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="area_features">
		<div class="container">
			<a class="anchor" id="registration_info"></a>
			<h2>
				Registrace na JobChallenge je zdarma!
			</h2>
			<p class="expanded">
				A dokonce ani není povinná, můžete přijít i bez ní. My však registraci rozhodně doporučujeme - získáte tím celou řadu výhod a důležitý náskok na pracovním trhu
			</p>
			<div class="boxes">
				<div class="row expanded">
					<div class="small-12 medium-4 large-4 columns">
						<div class="item icon_10">
							<h3>Oběd a svačina</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-4 large-4 columns">
						<div class="item icon_8">
							<h3>Vstup na afterparty</h3>
							<p>
								Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
							</p>
						</div>
					</div>
					<div class="small-12 medium-4 large-4 columns">
						<div class="item icon_9">
							<h3>Konzultace životopisu</h3>
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
						Zaregistrovat zdarma
					</a>
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
<script src="/js/carousel/slick.min.js"></script>
	
</body>
</html>