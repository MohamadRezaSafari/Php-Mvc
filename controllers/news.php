<?php

	
	
	class News extends Controller
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
			
			$this->view->newslist = $this->model->newslist();
			$this->view->render('admin');
			$this->view->render('news/index');
		} 






		function add()
		{
			$data                = array();
			$_pic                = array();
			$pic                 = array();

			$data['title']       = $_POST['title'];
			$data['short_text']  = $_POST['short_text'];
			$data['long_text']   = $_POST['long_text'];
			

			foreach ($_FILES['file']['name'] as $key => $value) {

				$white = array('image/gif', 'image/png', 'image/jpg', 'image/jpeg');
				if(in_array($_FILES['file']['type'][$key], $white)){

					@$_pic[]     = $_FILES['file']['name'][$key];
					@$pic[]      = md5(@$_pic[$key].microtime()).substr(@$_pic[$key], -5, 5);
					move_uploaded_file($_FILES['file']['tmp_name'][$key] , "public/upload/".$pic[$key]);
				}
            	
            }
			$this->model->add($data, $pic);
			header("location:".URL."news");
		}



	}