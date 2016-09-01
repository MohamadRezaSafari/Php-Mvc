<?php


	
	class Email_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


	

		function send($data)
		{
			$to      = $data['email'] ; 
			$subject = $data['title']   ; 
			$message = $data['text'] ;
			$from    = $data['emailsender'] ;

			mail ( $to , $subject , $message ) ;
			header("location:".URL."email");
			
		}
		
	
                           
                           
	}