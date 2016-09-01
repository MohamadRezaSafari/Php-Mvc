<?php



	/**
	* 
	*/
	class Settings extends Controller
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
			$this->view->render('settings/index');
		}


		function add()
		{
			$data        = array();

			$data['fb']  = $_POST['fb'];
			$data['tw']  = $_POST['tw'];
			$data['yt']  = $_POST['yt'];
			$data['ins'] = $_POST['ins'];

			$this->model->add($data);
			header("location:".URL."settings");
		}
	}