<!DOCTYPE html>
<html>
<head>
<title> Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Bootstrap -->
<link href="<?php echo URL; ?>public/css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="<?php echo URL; ?>public/css/thin-admin.css" rel="stylesheet" media="screen" />
<link href="<?php echo URL; ?>public/css/font-awesome.css" rel="stylesheet" media="screen" />
<link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet" />
<link href="<?php echo URL; ?>public/css/dashboard.css" rel="stylesheet" />
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="public/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo URL; ?>public/js/admin.js"></script>
<?php 
    if(isset($this->js)) 
      foreach ($this->js as $js) {
        echo '<script src="'.URL.'views/'.$js.'" type="text/javascript"></script>'; 
      }
  ?>


<?php  Session::init();  ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<div class="container">
  <div class="top-navbar header b-b"> <a data-original-title="Toggle navigation" class="toggle-side-nav pull-left" href="#"> </a>
    
    
    <ul class="nav navbar-nav navbar-right  hidden-xs">
      
     
      
      <li class="dropdown user  hidden-xs"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <span class="username">John Doe</span>  </a>
        <ul class="dropdown-menu">
          <li><a href="javascript:;" id="gray"> gray</a></li>
          <li><a href="javascript:;" id="silver"> silver</a></li>
          <li><a href="javascript:;" id="default"> default</a></li>
        </ul>
      </li>
    </ul>
    <form class="pull-right" />
                    <input type="search" placeholder="Search..." class="search" id="search-input" />
    </form>
  </div>
</div>
<div class="wrapper">
    <div id="l">
      
           <div class="left-nav">
              <div id="side-nav">
                <div class="left">
                  
                  <ul id="nav">
                    <li class="current"> <a href="<?php echo URL; ?>dashboard">  صفحه اصلی </a> </li>
                    <li> <a href="">  مدیریت اخبار   </a>
                      <ul class="sub-menu">
                        <li> <a href="<?php echo URL; ?>news">  درج خبر </a> </li>
                        <li> <a href="<?php echo URL; ?>allnews">  لیست کلیه اخبار </a> </li>
                      </ul>
                    </li>
					<li> <a href="">   مدیریت پیام ها</a>
                      <ul class="sub-menu">
                        <li> <a href="<?php echo URL; ?>message">پیام های دریافتی </a> </li>
                      </ul>
                    </li>
                   
                    <li> <a href="<?php echo URL; ?>gallery">  گالری </a> </li>
                    <li> <a href="<?php echo URL; ?>chat">  چت روم </a> </li>
                    <li> <a href="<?php echo URL; ?>email">  پست الکترونیکی </a> </li>
					<?php if(Session::get('role') == 'owner') : ?>	
						<li><a href="<?php echo URL; ?>user">کاربران</a></li>
					<?php  endif;?>
          <?php if(Session::get('role') != 'owner') : ?>  
            <li><a href="<?php echo URL; ?>users">کاربران</a></li>
          <?php  endif;?>
            <li disabled="disabled"><a href="<?php echo URL; ?>backup" >پشتیبان گیری از اطلاعات</a></li>
            <li><a href="<?php echo URL; ?>">راهنما</a></li>
                    <li> <a href="">  سایر امکانات  </a>
                      <ul class="sub-menu">
                        <li> <a href="<?php echo URL; ?>settings"> شبکه های اجتماعی</a> </li>
                        <li> <a href="<?php echo URL; ?>location">  مشخصات شرکت </a> </li>
                      </ul>
                    </li>
                     <li> <a href="<?php echo URL; ?>dashboard/Logout">  خروج </a> </li>
                  </ul>
                </div>
              </div>
            </div>
    </div>
 <!--<div class="page-content">
    <div class="content container">
      
     
       
      
      
    </div>
  </div>-->


</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo URL; ?>public/js/jquery.js"></script> 
<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo URL; ?>public/js/smooth-sliding-menu.js"></script> 

</body>
</html>
