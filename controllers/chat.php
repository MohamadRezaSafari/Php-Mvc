<?php



	/**
	* 
	*/
	class Chat extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			Session::init();
			$logged = Session::get('loggedIn');
			if($logged == false){

				Session::destroy();
				header("location:login");
				exit;
			}

			$this->view->js = array('chat/js/init.js');
		}


		function index()
		{
			$this->view->render('admin');
			$this->view->render('chat/index');
		}



		function insert()
		{
			$this->model->insert();
		}


		
		function lists()
		{
			$this->model->lists();
		}



	}