<?php


	
	class Message extends Controller
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
			$this->view->messagelist = $this->model->messagelist();
			$this->view->render('admin');
			$this->view->render('message/index');
		}



		function details($id)
		{
			$this->view->messageId = $this->model->messageId($id);
			$this->view->render('admin');
			$this->view->render('details/index');
		}



		function delete($id)
		{
			$this->model->delete($id);
			header("location:".URL."message");
		}


	}