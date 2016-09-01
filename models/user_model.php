<?php


	
	class User_Model extends Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}


		public function userList()
		{	
			$sth = $this->db->prepare("select id, login, role from users");
			$sth->execute();
			return $sth->fetchAll();
		}



		public function userSingleList($id)
		{	
			$sth  = $this->db->prepare("select id, login, role from users where id = :id");
			$sth->execute(array(':id' => $id));
			return $sth->fetch();
			
		}



		public function create($data)
		{
			$sth = $this->db->prepare("insert into users(login, password, role) values(:login, :password, :role)");
			$sth->execute(array(':login' => $data['login'] , ':password' => HASH::create('sha256', $data['password'], 'HASH_PASSWORD_KEY'), ':role' => $data['role']  ));
			
		}




		public function delete($id)
		{
			$sth  = $this->db->prepare("select role from users where id = :id");
			$sth->execute(array(':id' => $id));
			$data = $sth->fetch();
			if($data['role'] == 'owner'){

				return false;
			}
			
			$sth = $this->db->prepare("delete from users where id = :id");
			$sth->execute(array(':id' => $id));
		}





		public function editSave($data)
		{
			$sth = $this->db->prepare("UPDATE `users` SET `id`= :id,`login`= :login,`password`= :password,`role`= :role WHERE `id`= :id");
			$sth->execute(array(':id' => $data['id'], ':login' => $data['login'], ':password' => HASH::create('sha256', $data['password'], 'HASH_PASSWORD_KEY'), ':role' => $data['role'] ));
		}


	}