<?php


	
	class Dashboard_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		function xhrInsert()
		{
			$text = $_POST['text'];
			$sth  = $this->db->prepare("insert into data(text) values(:text)");
			$sth->execute(array(':text' => $text));
			echo json_encode($text);
		}



		function xhrGetListings()
		{
			$sth  = $this->db->prepare("select * from data");
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute();
			$data = $sth->fetchAll();
			echo json_encode($data);
		}


		function xhrDeleteListing()
		{
			$id = $_POST['id'];
			$sth = $this->db->prepare("delete from data where id = '".$id."' ");
			$sth->execute();
		}


		

		function message()
		{
			$sth = $this->db->prepare("select flag from contact");
			$sth->execute();
			$counter = 0;
                 while ($rows = $sth->fetch()) {
                    if($rows['flag'] == 0){
                          $counter++;
                  		}
                  }
            return $counter;
		}



		function news()
		{
			$sth = $this->db->prepare("select * from news");
			$sth->execute();
			return $sth->rowCount();
		}
	
                           
                           
	}