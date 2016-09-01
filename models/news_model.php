<?php



	
	class News_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}



		function add($data, $pic)
		{		        

			$sth = $this->db->prepare("insert into news(title, short_text, long_text, pic1, pic2, pic3, pic4, pic5) values(:title, :short_text, :long_text, :pic1, :pic2, :pic3, :pic4, :pic5)");
			$sth->execute(array(':title' => $data['title'], ':short_text' => $data['short_text'], ':long_text' => $data['long_text'], ':pic1' => @$pic[0], ':pic2' => @$pic[1], ':pic3' => @$pic[2], ':pic4' => @$pic[3], ':pic5' => @$pic[4] ));
			
		}



		function newslist()
		{
			$sth = $this->db->prepare("select * from news order by id DESC LIMIT 10");
			$sth->execute();
			return $sth->fetchAll();
		}


	}