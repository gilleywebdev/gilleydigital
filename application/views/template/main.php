<!DOCTYPE html>
<html>
	<head>
		<?php echo View::factory('includes/header')
				->bind('title', $title)
				->bind('description', $description) ?>
	</head>
	<body class="<?php echo $pagename; ?>_page" class="subpage">
		<header>
			<a href="/" title="Home"><img class="logo" src="/media/graphics/logo.png" alt="Gilley Digital"></a>
			<?php echo View::factory('includes/navigation') ?>
		<div style="clear:both"></div>
		</header>
		<div class="container">
			<div class="content">
				<?php echo $content ?>
			</div>
		</div>
		<footer>
			<div class="limiter">
				<p>
					<a href="/sitemap">Site Map</a> &bull;
					<a href="http://www.facebook.com/gilleywebdev" target="_blank" title="Gilley Digital on Facebook">Facebook</a> &bull;
					<a href="http://www.twitter.com/gilleywebdev" target="_blank" title="Gilley Digital on Twitter">Twitter</a> &bull;
					<?php echo Info::get('phone') ?> &bull;
					<a href="/contact">Contact</a>
				</p>
				<p>&copy; Gilley Digital <?php echo date('Y') ?> &bull; All Rights Reserved &bull; Gilley Digital is an independent <a href="/web-design" title="More info about web design from Gilley Digital">web design</a> and <a href="/website-development" title="More info about website development from Gilley Digital">development</a> agency in Portland, Maine</p>
			</div>
		</footer>
	</body>
</html>
<?php Scripts::output() ?>