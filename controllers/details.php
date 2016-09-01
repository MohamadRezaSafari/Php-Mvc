<?php



	/**
	* 
	*/
	class Details extends Controller
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
			$this->view->render('details/index');
		}







	}




