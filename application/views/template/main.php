<!DOCTYPE html>
<html>
	<head>
		<?php echo View::factory('includes/header')
				->bind('title', $title)
				->bind('description', $description) ?>
	</head>
	<body class="<?php echo $pagename; ?>_page">
		<div class="header">
			<a href="/" title="Home"><img class="logo" src="/graphics/logo.png" alt="Gilley Digital"></a>
			<?php echo View::factory('includes/navigation') ?>
			<div class="cf"></div>
		</div>
		<div class="container">
			<div class="content">
				<?php echo $content ?>
			</div>
		</div>
		<div class="footer">
			<?php echo View::factory('includes/footer') ?>
		</div>
	</body>
</html>
<?php // Scripts::output('script.js') ?>