<!DOCTYPE html>
<html>
	<head>
		<?php echo View::factory('includes/header')
				->bind('title', $title)
				->bind('description', $description) ?>
	</head>
	<body class="<?php echo $pagename; ?>_page">
		<header>
			<a href="/" title="Home"><img class="logo" src="/media/graphics/logo.png" alt="Gilley Digital"></a>
			<?php echo View::factory('includes/navigation') ?>
		<div class="cf"></div>
		</header>
		<div class="container">
			<div class="content">
				<?php echo $content ?>
			</div>
		</div>
		<footer>
			<div class="footer_block info">
				<p>
					<strong>Phone: </strong><?php echo Info::get('phone') ?>
					<br>
					<strong>Email: </strong><a href="mailto:<?php echo Info::get('email') ?>"><?php echo Info::get('email') ?></a>
				</p>
				<div class="social">
					<a href="https://www.facebook.com/gilleywebdev" target="_blank">
						<img src="/media/graphics/facebook.png" alt="Facebook">
					</a>
					<a href="https://twitter.com/gilleywebdev" target="_blank">
						<img src="/media/graphics/twitter.png" alt="Twitter">
					</a>
					<a href="http://www.linkedin.com/pub/chris-gilley/15/2/36b" target="_blank">
						<img src="/media/graphics/linkedin.png" alt="LinkedIn">
					</a>
				</div>
			</div>
<?php /*
			<div class="footer_block aotw">
				<div class="aotw_inner">
					<p><strong>Chris' album of the week</strong><br>
					Dirty Projectors - Swing Lo Magellan</p>
					<div class="aotw_link link_1">
						<img src="/media/graphics/youtube.png"><a href="http://www.youtube.com"> Youtube</a>
					</div>
					<div class="aotw_link link_2">
						<img src="/media/graphics/spotify.png"><a href="http://www.spotify.com"> Spotify</a>
					</div>
					<div class="cf"></div>
				</div>
			</div>
*/ ?>
			<div class="cf"></div>
			<p class="footer_roundup">&copy; Gilley Digital <?php echo date('Y') ?> &bull; All Rights Reserved &bull; Gilley Digital is a web design and development agency in Portland, Maine &bull; <a href="/sitemap">Site Map</a><br></p>
		</footer>
	</body>
</html>
<?php Scripts::output() ?>