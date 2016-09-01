<?php



	/**
	* 
	*/
	class Message_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		



		public function messagelist()
		{
			$sth = $this->db->prepare("select * from contact order by id DESC");
			$sth->execute();
			return $sth->fetchAll();
		}




		public function messageId($id)
		{
			$sth = $this->db->prepare("select * from contact where id = :id ");
			$sth->execute(array(':id' => $id));
			return $sth->fetch();
			
		}



		public function delete($id)
		{
			$sth = $this->db->prepare("delete from contact where id = :id ");
			$sth->execute(array(':id' => $id ));
		}



	}