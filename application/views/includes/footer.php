			<div class="footer_block info">
				<p>
					<strong>Phone: </strong><?php echo Info::get('phone') ?>
					<br>
					<strong>Email: </strong><a href="mailto:<?php echo Info::get('email') ?>"><?php echo Info::get('email') ?></a>
				</p>
				<?php echo View::factory('includes/social') ?>
			</div>
<?php /*
			<div class="footer_block aotw">
				<div class="aotw_inner">
					<p><strong>Chris' album of the week</strong><br>
					Dirty Projectors - Swing Lo Magellan</p>
					<div class="aotw_link link_1">
						<img src="/graphics/youtube.png"><a href="http://www.youtube.com"> Youtube</a>
					</div>
					<div class="aotw_link link_2">
						<img src="/graphics/spotify.png"><a href="http://www.spotify.com"> Spotify</a>
					</div>
					<div class="cf"></div>
				</div>
			</div>
*/ ?>
			<div class="cf"></div>
			<p class="footer_roundup">&copy; Gilley Digital <?php echo date('Y') ?> &bull; All Rights Reserved &bull; Gilley Digital is a web design and development agency in Portland, Maine &bull; <a href="/sitemap">Site Map</a><br></p>