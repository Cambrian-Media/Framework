<?php if (!FRONT_LOADED) die('You do not have permission to view this file directly.');

class Home_Controller extends Template_Controller
{

	public $template = 'template';

	public function index()
	{
		$view = new View('home');
		
		$this->template->content = $view;
		$this->template->render(TRUE);
	}

}

?>
