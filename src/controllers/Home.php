<?php

namespace werx\Skeleton\Controllers;

use Illuminate\Database\Capsule\Manager as Model;
use werx\Core\Controller;
use werx\Core\Database as DB;
use werx\Messages\Messages;

class Home extends Controller
{
	public function __construct()
	{
		parent::__construct();

		// Set our default template.
		$this->template->layout('layouts/default');

		// Set some variables for all views.
		$this->template->page_title = 'Werx Skeleton';
		
		// Load our primary config file.
		$this->config->load('config');

		// Load the messages library, passing in an instance of the session.
		Messages::getInstance($this->session);

		// And our database config file.
		#$this->config->load('database');
		
		// Initialize our database.
		#DB::init($this->config->get('dsn'));
	}
	
	public function index()
	{
		$this->template->output('home/index', ['heading' => 'Congratulations, it worked!']);
	}
}
