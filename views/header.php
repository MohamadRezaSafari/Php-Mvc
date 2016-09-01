<!DOCTYPE html>
<html>
<head>
	<title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/default.css">
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.1/themes/sunny/jquery-ui.css">
	<link href="<?php echo URL; ?>public/style/style.css" rel="stylesheet" />
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="public/js/jquery-2.1.3.min.js"></script>
	
	<?php 
		if(isset($this->js)) 
			foreach ($this->js as $js) {
				echo '<script src="'.URL.'views/'.$js.'" type="text/javascript"></script>'; 
			}
	?>
</head>
<body>
	
	
	<?php  Session::init(); ?>
	<header>	

		<?php if(Session::get('loggedIn') == false) : ?>
			<a href="<?php echo URL; ?>index">Index</a>
			<a href="<?php echo URL; ?>help">Help</a>
		<?php endif;?>
		<?php if(Session::get('loggedIn') == true) : ?>
			<a href="<?php echo URL; ?>dashboard">Dashboard</a>
		<?php if(Session::get('role') == 'owner') : ?>	
			<a href="<?php echo URL; ?>user">Users</a>
		<?php endif;?>
			<a href="<?php echo URL; ?>dashboard/Logout">Logout</a>	
		<?php else: ?>		
		<a href="<?php echo URL; ?>login">Login</a>
		<?php endif;?>
	</header>





	<div id="content"> 
		
	
