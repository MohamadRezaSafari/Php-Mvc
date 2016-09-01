<?php


	
	class Login_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		public function run()
		{
		
			$sth = $this->db->prepare("select id, role from users where login = :login && password = :password");
			$sth->execute(array(':login' => $_POST['login'] , ':password' =>  HASH::create('sha256', $_POST['password'], 'HASH_PASSWORD_KEY')));
			$data  = $sth->fetch();
			$count = $sth->rowCount();
			if($count > 0){

				Session::init();
				Session::set('role', $data['role']);
				Session::set('loggedIn', true);
				header("location:../dashboard");
				
			}else{

				header("location:../login");
			}
		}



	}

