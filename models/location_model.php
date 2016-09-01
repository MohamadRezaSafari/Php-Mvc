<?php



	
	/**
	* 
	*/
	class Location_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		function add($data)
		{
			$sth = $this->db->prepare("insert into location(tell, mobile, fax, address) values(:tell, :mobile, :fax, :address) ");
			$sth->execute(array(':tell' => $data['tell'], ':mobile' => $data['mobile'], ':fax' => $data['fax'], ':address' => $data['address']));
		}




	}