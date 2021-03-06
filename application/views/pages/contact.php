<h1>Contact</h1>
<p class="zero-bottom">Phone: <?php echo Info::get('phone') ?><br>
Email: <a href="mailto:<?php echo Info::get('email') ?>"><?php echo Info::get('email') ?></a><br>
</p>
<?php echo View::factory('includes/social') ?>
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