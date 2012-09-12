<!-- Encoding -->
<meta charset="UTF-8">

<!-- SEO -->
<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>">

<!-- Styles -->
<?php Styles::output(array(
		array('normalize', Styles::BASE),
		array('global', Styles::TEMPLATE),
	)) ?>

<!-- Vanity -->
<link rel="shortcut icon" href="favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

<!-- Facebook info -->
<?php if(Kohana::$environment === Kohana::PRODUCTION): ?>
	<meta property="og:image" content="<?php echo DOMAIN.'/graphics/fb-thumb.jpg' ?> ">
<?php endif;