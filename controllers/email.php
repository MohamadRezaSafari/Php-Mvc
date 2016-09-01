<?php



	/**
	* 
	*/
	class Email extends Controller
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
		}





		function index()
		{
		
			$this->view->render('admin');
			$this->view->render('email/index');
		}



		function send()
		{
			$data['email']       = $_POST['email'];
			$data['emailsender'] = $_POST['emailsender'];
			$data['title']       = $_POST['title'];
			$data['text']        = $_POST['text'];

			$this->model->send($data);
		}



	}

