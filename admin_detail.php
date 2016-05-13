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
					<li><a href="/admin_vstup.php">Admin vstup</a></li>
					<li><a href="/admin_detail.php">Admin detail</a></li>
					<li><a href="#">Place</a></li>
					<li><a href="#">Holder</a></li>
				</ul>
			</div>
		</div>
	</div>

	
	<div class="site_subpage">
		<div class="container">
			<h1>Lorem ipsum dolor sit amet</h1>
			<h2>Lorem ipsum dolor sit amet</h2>
			<h3>Lorem ipsum dolor sit amet</h3>
			<h4>Lorem ipsum dolor sit amet</h4>
			<h5>Lorem ipsum dolor sit amet</h5>
			<p>
				Etiam pretium dolor quis nisl faucibus commodo. Aenean maximus dolor et ultricies vulputate. Mauris ut sollicitudin lorem. Sed tincidunt eget ex in pulvinar. Ut sed nisi vulputate mi rhoncus imperdiet. Nullam luctus finibus diam quis hendrerit. Sed viverra, mi id varius euismod, lacus elit tincidunt odio, quis eleifend tellus arcu eu purus.
			</p>
			<ul>
				<li>Etiam pretium dolor quis nisl faucibus commodo</li>
				<li>Praesent tempus iaculis arcu ac tincidunt</li>
				<li>Vestibulum at ultricies odio, et iaculis nunc. Nullam id posuere mauris</li>
				<li>Nulla fermentum lacinia enim, ac sollicitudin sapien tempor quis</li>
			</ul>
			<hr />
			<form class="ui_form">
				<div class="row expanded">
					<div class="small-12 medium-12 large-6 columns">
						<div class="row expanded column">
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Samostatný label</span>
								</label>
							</div>
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Textový input</span>
									<input type="text" placeholder="Toto je popisek inputu" />
								</label>
							</div>
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Textový input - vyplněný</span>
									<input type="text" placeholder="Toto je popisek inputu" value="Lorem ipsum dolor sit" />
								</label>
							</div>
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Číselný input - vyplněný</span>
									<input type="number" value="0" />
								</label>
							</div>
						</div>
					</div>
					<div class="small-12 medium-12 large-6 columns">
						<div class="row expanded column">
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Select box</span>
									<select>
										<option disabled selected>Vyberte...</option>
										<option>Lorem ipsum dolor</option>
										<option>Lorem ipsum dolor</option>
										<option>Lorem ipsum dolor</option>
									</select>
								</label>
							</div>
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Select box</span>
									<select>
										<option disabled>Vyberte...</option>
										<option selected>Lorem ipsum dolor</option>
										<option>Lorem ipsum dolor</option>
										<option>Lorem ipsum dolor</option>
									</select>
								</label>
							</div>
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Custom checkbox</span>
								</label>
								<label class="ui_check">
									<input type="checkbox" />
									<span>Check this</span>
								</label>
								<label class="ui_check">
									<input type="checkbox" />
									<span>Check this</span>
								</label>
								<label class="ui_check">
									<input type="checkbox" checked />
									<span>Check this</span>
								</label>
							</div>
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Custom radio</span>
								</label>
								<label class="ui_radio">
									<input type="radio" name="test" value="1" />
									<span>Check this</span>
								</label>
								<label class="ui_radio">
									<input type="radio" name="test" value="2" />
									<span>Check this</span>
								</label>
								<label class="ui_radio">
									<input type="radio" name="test" value="2" checked />
									<span>Check this</span>
								</label>
							</div>
							<div class="small-12 medium-12 large-12 columns">
								<label>
									<span class="ui_label">Soubor</span>
									<input type="file" value="0" />
								</label>
							</div>
						</div>
					</div>
					<div class="small-12 medium-12 large-12 columns">
						<label>
							<span class="ui_label">Textová oblast</span>
							<textarea placeholder="Toto je popisek inputu" rows="5"></textarea>
						</label>
					</div>

					<div class="small-12 medium-12 large-12 columns">
						<br />
						<table>
							<thead>
								<tr>
									<th>Lorem ipsum</th>
									<th>Dolor sit</th>
									<th>Amed text</th>
									<th>Column</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Lorem ipsum</td>
									<td>Dolor sit</td>
									<td>Amed text</td>
									<td>Column</td>
								</tr>
								<tr>
									<td>Lorem ipsum</td>
									<td>Dolor sit</td>
									<td>Amed text</td>
									<td>Column</td>
								</tr>
								<tr>
									<td>Lorem ipsum</td>
									<td>Dolor sit</td>
									<td>Amed text</td>
									<td>Column</td>
								</tr>
								<tr>
									<td>Lorem ipsum</td>
									<td>Dolor sit</td>
									<td>Amed text</td>
									<td>Column</td>
								</tr>
							</tbody>
						</table>
						<br />
					</div>
					
					<div class="small-12 medium-12 large-12 columns">
						<label>
							<span class="ui_label">Checklist big</span>
						</label>
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
					<div class="small-12 medium-12 large-12 columns">
						<button class="button primary">Primary button</button>
						<button class="button secondary">Secondary button</button>
					</div>

				</div>
			</form>
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