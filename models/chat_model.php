<?php


	
	class Chat_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		function insert()
		{
			$username = $_POST['username'];
			$msg      = $_POST['msg'];
			$sth      = $this->db->prepare("insert into logs(username, msg) values(:username, :msg)");
			$sth->execute(array(':username' => $username, ':msg' => $msg));
			
		}


	
       function lists()
       {
       		$sth = $this->db->prepare("select username, msg from logs order by id DESC LIMIT 12");
       		$sth->execute();
       		$sth->setFetchMode(PDO::FETCH_ASSOC);
       		$data = $sth->fetchAll();
       		foreach ($data as $key => $value) {
       			echo $value['username'] .' :     '. "<span>".$value['msg']."</span><br>";
       		}
       }

                  
                           
	}