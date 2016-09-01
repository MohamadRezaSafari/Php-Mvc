<?php


	/**
	* 
	*/
	class Settings_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		function add($data)
		{
			$sth = $this->db->prepare("insert into settings(fb, tw, yt, ins) values(:fb, :tw, :yt, :ins) ");
			$sth->execute(array(':fb' => $data['fb'], ':tw' => $data['tw'], ':yt' => $data['yt'], ':ins' => $data['ins']));
		}
	}