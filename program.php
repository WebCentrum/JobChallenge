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
						<li class="active"><a href="/program.php">Doprovodný program</a></li>
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
					<h1 class="title primary">Doprovodný program</h1>
				</div>
			</div>

		</div>
	</div>


	<div class="area_program_detail">
		<div class="container">
			<p class="headline">
				Doprovodný program se tradičně skládá ze série přednášek, seminářů a workshopů. Je rozdělen do <strong>3 tematických panelů</strong>:
			</p>
			<div class="row expanded">
				<div class="small-12 medium-12 large-4 columns item">
					<div class="head">
            <img src="/layout/img/program_01.jpg">
						<h2>Panel praktických tipů</h2>
						<p>
							Věnuje se <strong>aktuálním trendům ve výběrovém řízení</strong> a přináší informace o novinkách v oblasti recruitmentu a návody, které využijete při hledání práce.
						</p>
					</div>
					<div class="ui_timetable col1">
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
						</div>
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
						</div>
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
						</div>
					</div>
				</div>
				<div class="small-12 medium-12 large-4 columns item">
					<div class="head">
            <img src="/layout/img/program_02.jpg">
						<h2>Panel rozvoje</h2>
						<p>
							Je zaměřený na <strong>šest dovedností</strong>, které jsou na trhu práce nejdůležitější jako jsou znalosti projektového řízení, obchodní dovednosti, týmová spolupráce, či efektivní komunikace.
						</p>
					</div>
					<div class="ui_timetable col2">
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
						</div>
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
						</div>
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
						</div>
					</div>
				</div>
				<div class="small-12 medium-12 large-4 columns item">
					<div class="head">
            <img src="/layout/img/program_03.jpg">
						<h2>Panel zaměstnání</h2>
						<p>
							Přináší <strong>setkání s HR manažery a personalisty</strong> vybraných společností, kteří prozradí jak to vypadá v jejich firmě, nebo jak probíhá přijímací řízení.
						</p>
					</div>
					<div class="ui_timetable col3">
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
						</div>
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
						</div>
						<div class="item">
							<time>9:30</time>
							<h3>
								<a href="/program_detail.php">Suspendisse commodo quam a turpis dictum malesuada</a>
							</h3>
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