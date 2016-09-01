<?php


	
	
	class Users extends Controller
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



		public function index()
		{
			$this->view->userList = $this->model->userList();
			$this->view->render('admin');
			$this->view->render('users/index');
		}



		public function create()
		{
			$data             = array();
			$data['login']    = $_POST['login'];
			$data['password'] = $_POST['password'];
			$data['role']     = $_POST['role'];

			$this->model->create($data);
			header("location:".URL."users");
		}




		public function edit($id)
		{
			$this->view->user = $this->model->userSingleList($id);
			$this->view->render('admin');
			$this->view->render('users/edit');
		}




		public function editSave($id)
		{
			$data             = array();
			$data['id']       = $id;
			$data['login']    = $_POST['login'];
			$data['password'] = $_POST['password'];
			$data['role']     = $_POST['role'];

			$this->model->editSave($data);
			header("location:".URL."users");
		}



		public function delete($id)
		{
			$this->model->delete($id);
			header("location:".URL."users");
		}



	}