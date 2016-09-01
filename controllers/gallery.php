<?php



	
	class Gallery extends Controller
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
			
			$this->view->picture = $this->model->picture();
			$this->view->render('admin');
			$this->view->render('gallery/index');
		}





		function upload()
		{				
			$white = array('image/gif', 'image/png', 'image/jpg', 'image/jpeg');
			if(in_array($_FILES['file']['type'], $white)){	
			$_pic    = $_FILES['file']['name'];
			$pic     = md5($_pic.microtime()).substr($_pic, -5, 5);		
			move_uploaded_file($_FILES['file']['tmp_name'], "public/upload/".$pic);
			}

           $this->model->upload($pic);
           header("location:".URL."gallery");
		}






		function delete($id)
		{
			$this->model->delete($id);
			header("location:".URL."gallery");
		}



	}