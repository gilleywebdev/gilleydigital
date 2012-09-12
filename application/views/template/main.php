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
				<p>&copy; Gilley Digital <?php echo date('Y') ?></p>
			</div>
		</footer>
	</body>
</html>
<?php Scripts::output() ?>