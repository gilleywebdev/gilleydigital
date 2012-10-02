<h1>Contact</h1>
<p class="zero-bottom">Phone: <?php echo Info::get('phone') ?><br>
Email: <a href="mailto:<?php echo Info::get('email') ?>"><?php echo Info::get('email') ?></a><br>
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
<?php
	echo View::factory('includes/forms/errors');
	echo Form::open();
	echo Form::text('name', NULL, array('label' => '<strong>Name</strong>'));
	echo Form::text('email', NULL, array('label' => '<strong>Email</strong>'));
	echo Form::text('company', NULL, array('label' => 'Company'));
	echo Form::text('website', NULL, array('label' => 'Website (if any)'));
	echo Form::text('honeypot', NULL, array('label' => 'Leave this blank'));	
	echo Form::textarea('message', NULL, array('label' => '<strong>What can I do for you?</strong>'));
	echo Form::submit(NULL, 'Send it');
	echo Form::close();