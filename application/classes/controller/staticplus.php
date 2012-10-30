<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Staticplus extends Controller_Static {
	public function action_work()
	{
		Styles::add('work', Styles::PAGE);
	}
	
	public function action_pricing()
	{
		Styles::add('pricing', Styles::PAGE);
	}
	
	public function action_contact()
	{
		if($post = Form::post())
		{
			$post->rule('name', 'not_empty')
				->rule('email', 'not_empty')
				->rule('email', 'email')
				->rule('message', 'not_empty')
				->rule('honeypot', 'exact_length', array(0, ':field'));

			if($post->check())
			{
				$fields = $post->data();
				unset($fields['honeypot']);

				$message = View::factory('emails/contact')->set('fields', $fields);

				//Mail
				$subject = 'Website inquiry from '.$post['name'];
				$from = 'info@'.DOMAIN;
				$to = Info::get('email');

				Email::send($to, $from, $subject, $message, $html = true);

				$this->request->redirect('thankyou');
			}

			Form::errors($post->errors('contact'));
		}

		Styles::add('forms', Styles::PLUGIN);
		Styles::add('contact', Styles::PAGE);
	}
}