<?php



	/**
	* 
	*/
	class AllNews extends Controller
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
			$this->view->allnewslist = $this->model->allnewslist();
			$this->view->render('admin');
			$this->view->render('allnews/index');
		}



		function delete($id)
		{
			$this->model->delete($id);
			header("location:".URL."allnews");
		}
		



	}