<?php

error_reporting(0);
ini_set('display_errors', 'Off');
include('header.php');

?>
<body>
<div id="skrollr-body">
	
	<div class="site_header h_max img_3">
		<div class="inside fill">
			<!-- PLADEHOLDER FOR FIXED MENU -->
			<div class="menu_placeholder"></div>
			<!-- FIXED MENU -->
			<div class="fixed" data-0="color: inherit;" data-250="color: inherit;">
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
								<li class="active"><a href="/o_veletrhu.php">Základní informace</a></li>
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
							<a href="/registrace_uchazece.php">Registrace</a>
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
					<h1 class="title primary">O veletrhu JobChallenge 2016</h1>
					<p class="headline">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
					</p>
					
					<ul class="buttons simple">
						<li>
							<a class="primary smooth" href="#introduction">Více informací</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="submenu_wrapper">
				<ul id="anchor_menu" class="links" data-smooth-scrolling="off" data-0="position:relative;" data-top="position:fixed;">
					<li><a href="#introduction">Představení veletrhu</a></li>
					<li><a href="#history">Historie veletrhu</a></li>
					<li><a href="#reviews">Reference účastníků</a></li>
					<li><a href="#organizers">Pořadatelé</a></li>
					<li><a href="/registrace_uchazece.php">Registrace</a></li>
				</ul>
			</div>
		</div>
	</div>

	
	<div class="area_introduction area_gallery">
		<div class="container">
			<a class="anchor" id="introduction"></a>
			<h2>
				Veletrh práce JobChallenge
			</h2>
			<div class="intro_text">
				<p>
					Veletrh JobChallenge je <strong>jedním z největších veletrhů práce v ČR</strong>. Pořádají ho Masarykova univerzita, Mendelova univerzita v Brně a Vysoké učení technické v Brně. Každý rok ho navštíví <strong>téměř 3 000 studentů a více než 70 zaměstnavatelů</strong>. Studentům usnadňuje orientaci na trhu práce a pomáhá jim objevit <strong>nové možnosti pracovního uplatnění</strong>. Studenti MENDELU mají v den veletrhu <strong>rektorské volno</strong>. Vystavujícím firmám umožňuje představit se studentům a absolventům tří největších brněnských univerzit, budovat image společnosti a navázat kontakt s nejzajímavějšími kandidáty.
				</p>
				<div class="row expanded when_where">
					<div class="small-12 medium-6 large-6 columns">
						<h3>Kdy se veletrh koná?</h3>
						<p>
							<strong>9. listopadu 2016</strong>, 9:00 - 16:30
						</p>
					</div>
					<div class="small-12 medium-6 large-6 columns">
						<h3>Kde se veletrh koná?</h3>
						<p>
							V prostorách <a href="https://www.google.cz/maps/place/Ve+Va%C5%88kovce+465%2F2,+602+00+Brno-st%C5%99ed-Trnit%C3%A1/@49.1872196,16.6140036,17z/data=!3m1!4b1!4m5!3m4!1s0x471294fe56205fc9:0x530885ae7d4e101a!8m2!3d49.1872161!4d16.6161923?hl=cs" target="_blank"><strong>Fait Gallery</strong></a> v Brně 
						</p>
					</div>
				</div>
			</div>
			
			<div class="photos secondary">
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
			<div class="row expanded">
				<div class="small-12 medium-12 large-6 columns">
					<h3>Studentí</h3>
					<ul>
						<li>zjistí, <strong>kde a jak hledat práci</strong></li>
						<li>udělají si představu o <strong>potřebách pracovního trhu</strong></li>
						<li>poznají směry, jimiž se jejich kariéra může ubírat</li>
						<li>zjistí, kam vyrazit na <strong>stáž</strong> nebo <strong>trainee program</strong></li>
						<li>mohou se dále <strong>sebevzdělávat</strong> v rámci <a href="#">doprovodného programu</a></li>
						<li>vytvoří si <strong>nové kontakty</strong></li>
					</ul>
					<a href="#" class="more">Informace pro studenty</a>
				</div>
				<div class="small-12 medium-12 large-6 columns">
					<h3>Zaměstnavatelé</h3>
					<ul>
						<li>představí svoji společnost téměř <strong>3 000 studentům a absolventům</strong> ze <a href="#">tří největších brněnských univerzit</a></li>
						<li>získají přístup k <strong>CV účastníků veletrhu</strong></li>
						<li>osobně se seznámí se studenty, vytipují si mezi nimi <strong>zajímavé kandidáty</strong> a získají osobní kontakty</li>
						<li>získají zpětnou vazbu v rámci vyhodnocení <strong>dotazníkového šetření mezi účastníky veletrhu</strong> i samotnými vystavovateli</li>
						<li>zajistí si celoroční propagaci v rámci <a href="#">Challenge Book</a></li>
					</ul>
					<a href="#" class="more">Informace pro zaměstnavatele</a>
				</div>
				
			</div>
		</div>
	</div>
	<div class="area_stats">
		<div class="container">
			<h2>
				JobChallenge v číslech
			</h2>
			<div class="inside">
				<div class="item">
					<span>2000+</span>
					návštěvníků
				</div>
				<div class="item">
					<span>89</span>
					vystavovatelů
				</div>
				<div class="item">
					<span>21</span>
					přednášek
				</div>
				<div class="item">
					<span>13</span>
					oborů
				</div>
			</div>
		</div>
	</div>
	<div class="area_history_horizontal">
		<div class="container">
			<a class="anchor" id="history"></a>
			<h2>
				Veletrh s bohatou historií
			</h2>
			<div class="inside">
				<div class="row expanded">
					<div class="small-12 medium-12 large-3 columns item">
						<div class="num">2007</div>
						<h3>1. ročník JobChallenge</h3>
						<p>
							První rok v režii Masarykovy univerzity navštívilo téměř 1000 studentů a 30 firem
						</p>
					</div>
					<div class="small-12 medium-12 large-3 columns item">
						<div class="num">2011</div>
						<h3>3 pořádající univerzity</h3>
						<p>
							Na organizaci veletrhu se nově podílejí také Mendelova univerzita a Vysoké učení technické v Brně
						</p>
					</div>
					<div class="small-12 medium-12 large-3 columns item">
						<div class="num">2014</div>
						<h3>3000 studentů, 70 firem</h3>
						<p>
							2 související konference před veletrhem, konzultace životopisů, chill-out zóna, veletržní soutěž
						</p>
					</div>
					<div class="small-12 medium-12 large-3 columns item final">
						<div class="num">2016</div>
						<h3>10. ročník</h3>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="area_reviews">
		<div class="container">
			<a class="anchor" id="reviews"></a>
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
	<div class="area_catalog">
		<div class="container">
			
			<h2>
				Katalog vystavovatelů 2015/2016
			</h2>
			<div class="inside">
				<img src="/content/catalog_preview.png" />
			</div>
			
		</div>
	</div>
	<div class="area_organizers">
		<div class="container">
			<a class="anchor" id="organizers"></a>
			<h2>
				Kdo stojí za JobChallenge
			</h2>
			<p class="headline">
				Veletrh JobChallenge pořádají <strong>3 největší brněnské univerzity</strong> – Masarykova univerzita, Mendelova univerzita v Brně a Vysoké učení technické v Brně. Organizaci zaštit’ují <strong>pracovníci kariérních a poradenských center těchto univerzit</strong>. 
			</p>
			
			<div class="item">
				<div class="logo">
					<a href="https://www.muni.cz/" target="_blank">
						<img src="/content/ogranizer_mu.png" />
					</a>
				</div>
				<div class="text">
					<h3>Kariérní centrum Masarykovy univerzity</h3>
					<p>
						Kariérní centrum MU spolu s Poradenským centrem MU pořádá pravidelné školící semináře, kurzy, přednášky a individuální konzultace z oblasti kariérového a psychologického poradenství. Cílem aktivit je rozvoj kompetencí studentů a absolventů potřebných k hledání zaměstnání, vytváření kontaktů studentů s potenciálními zaměstnavateli, propojení univerzitní sféry se sférou pracovního trhu a usnadnění přechodu absolventů do praxe. Kariérní centrum MU slouží také jako kontaktní místo pro zaměstnavatele na Masarykově univerzitě.
					</p>
						<a href="#" class="more">Více informací</a>
				</div>
			</div>
			<div class="item">
				<div class="logo">
					<a href="http://mendelu.cz/" target="_blank">
						<img src="/content/ogranizer_mendel.png" />
					</a>
				</div>
				<div class="text">
					<h3>Poradenské centrum Mendelovy univerzity v Brně</h3>
					<p>
						Poradenské centrum je součástí Institutu celoživotního vzdělávání Mendelovy univerzity v Brně. Své služby nabízí uchazečům o studium, studentům, absolventům, zaměstnancům univerzity i veřejnosti. Orientuje se především na individuální a skupinové poradenství, poradenství kariérové a speciálně-pedagogické. Díky individuálnímu a skupinovému poradenství mohou klienti překonat osobní, rodinné, partnerské i studijní problémy, ale je možné se zaměřit též na kariérové poradenství.
					</p>
					<a href="#" class="more">Více informací</a>
				</div>
			</div>
			<div class="item">
				<div class="logo">
					<a href="https://www.vutbr.cz/" target="_blank">
						<img src="/content/ogranizer_vut.png" />
					</a>
				</div>
				<div class="text">
					<h3>Institut celoživotního vzdělávání Vysokého učení technického v Brně</h3>
					<p>
						Institut celoživotního vzdělávání VUT v Brně připravuje studenty pro vstup na trh práce, mohou se zúčastnit interaktivních kurzů soft skills, kurzů přípravy na výběrové řízení nebo přijít na individuální kariérové konzultace. Poradenské centrum nabízí studentům pomoc v náročných životních situacích a při studijních obtížích. Podporuje studenty se specifickými nároky na studium.
					</p>
					<a href="#" class="more">Více informací</a>
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