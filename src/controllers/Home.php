<?php

namespace werx\Skeleton\Controllers;

use Illuminate\Database\Capsule\Manager as Model;
use werx\Core\Controller;
use werx\Core\Database as DB;
use werx\Messages\Messages;

class Home extends Common
{
	public function __construct()
	{
		parent::__construct();

		// Set some variables for all views.
		$this->template->page_title = 'Werx Skeleton';
	}
	
	public function index()
	{
		Messages::success('Werx Installation Successful!');
		$this->template->output('home/index', ['heading' => 'Congratulations, it worked!']);
	}
}
