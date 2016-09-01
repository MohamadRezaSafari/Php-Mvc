<?php



	/**
	* 
	*/
	class AllNews_Model extends Model
	{
		

		function __construct()
		{
			parent::__construct();
		}






		function allnewslist()
		{
			$sth = $this->db->prepare("select * from news order by id DESC");
			$sth->execute();
			return $sth->fetchAll();
		}





		function delete($id)
		{
			$sth  = $this->db->prepare("select pic1, pic2, pic3, pic4, pic5 from news where id = :id");
			$sth->execute(array(':id' => $id));
			$pic  = $sth->fetchAll();
			$link = 'public/upload/';
			foreach ($pic as $key => $value) {
				$url = $value;
			}
			
			@$url[0] = $link.$value[0];
			@$url[1] = $link.$value[1];
			@$url[2] = $link.$value[2];
			@$url[3] = $link.$value[3];
			@$url[4] = $link.$value[4];
			
			@unlink($url[0]);
			@unlink($url[1]);
			@unlink($url[2]);
			@unlink($url[3]);
			@unlink($url[4]);
			
			$sth = $this->db->prepare("delete from news where id = :id");
			$sth->execute(array(':id' => $id));
			

		}








	}