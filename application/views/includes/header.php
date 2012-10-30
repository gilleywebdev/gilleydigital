<!-- Encoding -->
<meta charset="UTF-8">

<!-- SEO -->
<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>">

<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

<!-- Styles -->
<?php Styles::output(
	array(
		array('normalize', Styles::BASE),
		array('global', Styles::TEMPLATE),
	),
	'styles') ?>

<!--[if IE <= 8]>
<link rel="stylesheet" href="/styles/css/ie.css">
<![endif]-->

<!-- Vanity -->
<link rel="shortcut icon" href="favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

<!-- Google Apps -->
<meta name="google-site-verification" content="vEBGtneZwXF_wfkRaJNGnWmLPq229zVqHtUSp5WzEO0" />

<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35239021-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>