<?php


	/**
	* 
	*/
	class Location extends Controller
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
			$this->view->render('location/index');
		}


		function add()
		{
			$data            = array();

			$data['tell']    = $_POST['tell'];
			$data['mobile']  = $_POST['mobile'];
			$data['fax']     = $_POST['fax'];
			$data['address'] = $_POST['address'];

			$this->model->add($data);
			header("location:".URL."location");
		}

	}