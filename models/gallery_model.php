<?php


	/**
	* 
	*/
	class Gallery_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}





		function upload($pic)
		{
			$sth = $this->db->prepare("insert into gallery(pic) values(:pic)");
			$sth->execute(array(':pic' => $pic));

		}






		function picture()
		{
			$sth = $this->db->prepare("select * from gallery");
			$sth->execute();
			return $sth->fetchAll();
		}






		function delete($id)
		{
			$sth  = $this->db->prepare("select pic from gallery where id = :id");
			$sth->execute(array(':id' => $id));
			$pic  = $sth->fetch();
			$link = 'public/upload/';
			$value= $pic['pic'];
			@$url = $link.$value;
			@unlink($url);
			
			$sth = $this->db->prepare("delete from gallery where id = :id ");
			$sth->execute(array(':id' => $id ));
		}





	}