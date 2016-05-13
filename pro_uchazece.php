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
				<a href="#registration_info" class="secondary">Více informací o registraci</a>
			</div>
			<div>
				<button class="button primary">OK</button>
			</div>
		</div>
	</div>
	
</div>
<!-- POPUP END -->

<div id="skrollr-body">
	
	<div class="site_header h_max img_1">
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
					<h1 class="title primary">Nastartujte svou pracovní kariéru!</h1>
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
					<li class="active"><a href="#informations">Základní informace</a></li>
					<li><a href="#howto">Jak se připravit na veletrh</a></li>
					<li><a href="#exhibitors">Seznam vystavovatelů</a></li>
					<li><a href="#getready">Get Ready</a></li>
					<li><a class="admin" href="/prihlaseni.php">Administrace</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="area_features student">
		<div class="container">
			<h2>
				Proč přijít na veletrh JobChallenge 2016
			</h2>
			
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
	
	<div class="area_basic_info">
		
		<div class="container">
			<a class="anchor" id="informations"></a>
			<h2>
				Základní informace o JobChallenge 2016
			</h2>
			<div class="row expanded">
				<div class="small-12 medium-12 large-6 columns texts">
					<h3>Kdy se veletrh koná?</h3>
					<p>
						Letošní ročník JobChallenge proběhne <strong>9. listopadu 2016</strong>.
						Akce začíná v 9:00 a potrvá až do odpoledních hodin.
					</p>
					
					<h3>Kam mám dorazit?</h3>
					<p>
						Veletrh JobChallenge 2016 se uskutečních v prostorách umělecké galerie 
						Fait Gallery v Brně (vedle Vaňkovky).
						<br />
						<a href="#" class="more">Zobrazit na mapě</a>
					</p>
					
					<h3>Pro koho je veletrh určen?</h3>
					<p>
						Veletrh je určen pro <strong>studenty a absolventy</strong> vysokých škol, kteří se chtějí zorientovat 
						na trhu práce a získat první důležité kontakty na možné zaměstnavatele.
					</p>
					
					<h3>Platí se za veletrh nějaké vstupné?</h3>
					<p>
						Veletrh pracovních přiležitostí JobChallenge 2016 je <strong>ZDARMA</strong>. Návštěvníci 
						se však mohou bezplatně zaregistrovat a získat tak zajímavé výhody.
						<br />
						<a href="#" class="more">Více o registraci</a>
					</p>
				</div>
				<div class="small-12 medium-12 large-6 columns gallery">
					<div class="row expanded">
						<div class="small-12 medium-12 large-12 columns item video">
							<a href="https://www.youtube.com/watch?v=Zixs48RZU08" rel="lightbox[pack1]">
								<img src="https://i.ytimg.com/vi/Zixs48RZU08/maxresdefault.jpg" alt="" />
							</a>
						</div>
						<div class="small-12 medium-6 large-6 columns item">
							<a href="https://placekitten.com/500/600" rel="lightbox[pack1]">
								<img src="https://placekitten.com/600/350" alt="" />
							</a>
						</div>
						<div class="small-12 medium-6 large-6 columns item">
							<a href="https://placekitten.com/500/600" rel="lightbox[pack1]">
								<img src="https://placekitten.com/600/350" alt="" />
							</a>
						</div>
						<div class="small-12 medium-6 large-6 columns item">
							<a href="https://placekitten.com/500/600" rel="lightbox[pack1]">
								<img src="https://placekitten.com/600/350" alt="" />
							</a>
						</div>
						<div class="small-12 medium-6 large-6 columns item">
							<a href="https://placekitten.com/500/600" rel="lightbox[pack1]">
								<img src="https://placekitten.com/600/350" alt="" />
							</a>
						</div>
						
					</div>
				</div>
				
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
	
	
	<div class="area_howto">
		
		<div class="container">
			<a class="anchor" id="howto"></a>
			<h2>
				Jak se připravit na JobChallenge 2016
			</h2>
			<p class="expanded">
				Účast na veletrhu vám může přinést spoustu cenných informací a zkušeností. 
				Připravili jsme pro vás několik tipů, jak si ze setkání se zaměstnavateli odnést co nejvíce
			</p>
			<div class="steps">
				<!------->
				<div class="item">
					<div class="row expanded">
						<div class="small-12 medium-12 large-8 columns">
							<div class="num">01</div>
							<h3>
								Nahrajte do databáze své CV
							</h3>
							<p>
								Firmy mají do databáze CV volný přístup. Pokud je to vaše zaujme, mohou vás sami oslovit.
							</p>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h4>Čtěte také:</h4>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
						</div>
					</div>
				</div>
				<!------->
				<div class="item">
					<div class="row expanded">
						<div class="small-12 medium-12 large-8 columns">
							<div class="num">02</div>
							<h3>
								Vyberte si své cíle
							</h3>
							<p>
								V seznamu vystavovatelů si vyfiltrujte firmy podle oboru, který vás zajímá. Následně si pořádně projděte jejich profily i webové stránky.
							</p>
							<p>
								<strong>Odpovězte si na otázky:</strong>
								<ul>
									<li>Na co se chci zeptat jejího zástupce?</li>
									<li>Jaké jiné firmy se v tomto odvětví pohybují?</li>
									<li>Co bych chtěl ve firmě dělat já?</li>
									<li>Na co se chci zeptat jejího zástupce?</li>
								</ul>
							</p>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h4>Čtěte také:</h4>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
						</div>
					</div>
				</div>
				<!------->
				<div class="item">
					<div class="row expanded">
						<div class="small-12 medium-12 large-8 columns">
							<div class="num">03</div>
							<h3>
								Přizpůsobte životopis
							</h3>
							<p>
								Na veletrh si vezměte alespoň 10 kopií svého CV. Pro každou firmu, o niž máte opravdový zájem, 
								vytvořte speciální životopis, ve kterém zdůrazníte ty kvality a zkušenosti, které jsou pro ni relevantní.
							</p>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h4>Čtěte také:</h4>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
						</div>
					</div>
				</div>
				<!------->
				<div class="item">
					<div class="row expanded">
						<div class="small-12 medium-12 large-8 columns">
							<div class="num">04</div>
							<h3>
								Dodržte dress-code
							</h3>
							<p>
								Na veletrh byste měli přijít stejně oblečeni, jako kdybyste šli na interview. 
							</p>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h4>Čtěte také:</h4>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
						</div>
					</div>
				</div>
				<!------->
				<div class="item">
					<div class="row expanded">
						<div class="small-12 medium-12 large-8 columns">
							<div class="num">05</div>
							<h3>
								Předem si připravte, jak se budete prezentovat
							</h3>
							<p>
								První dojem vzniká ve 30 sekundách. Využijte jich co nejlépe! 
								Když si předem připravíte svoje entrée, budete klidnější, snáze 
								zaměstnavatele oslovíte a o to lépe budete působit. 
							</p>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h4>Čtěte také:</h4>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
							<h5><a href="#">Lorem ipsum</a></h5>
						</div>
					</div>
				</div>
				<!------->
				
			</div>
			
		</div>
	</div>
	
	
	
	<div class="area_top_exhibitors">
		
		<div class="container">
			<a class="anchor" id="exhibitors"></a>
			<h2>
				TOP vystavovatelé
			</h2>
			<p>
				Seznamte se s nejlepšími firmami současnosti a začněte budovat cenné kontakty již nyní!
			</p>
			<script>
			$(function(){
				$("#exhibitors_slides").slidesjs({
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
			<div class="boxes" id="exhibitors_slides">
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
						<div class="item icon_6">
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
	<div class="area_getready">
		<div class="container">
			<a class="anchor" id="getready"></a>
			<h2>Přijďte i na konferenci Get Ready</h2>
			<p>Ještě před samotným veletrhem pořádáme speciální konferenci plnou zajímavých informací!</p>
			<div class="row expanded">
				<div class="small-12 medium-12 large-4 columns">
					<div class="inside">
						<h3>Jak se připravit na veletrh</h3>
						<p>
						Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
						</p>
					</div>
				</div>
				<div class="small-12 medium-12 large-4 columns">
					<div class="inside">
						<h3>Jak vystupovat na pohovoru</h3>
						<p>
						Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
						</p>
					</div>
				</div>
				<div class="small-12 medium-12 large-4 columns">
					<div class="inside">
						<h3>...a mnoho dalšího!</h3>
						<p>
						Seznámíte se s předními společnostmi a dozvíte se, jak to ve firmě vypadá
						</p>
					</div>
				</div>
			</div>
			<div class="more">
				<div>
					<a href="/get_ready.php">
						Více o konferenci
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
<script src="/js/jquery.anchormenu.js"></script>
<script src="/js/carousel/slick.min.js"></script>
	
	
</body>
</html>