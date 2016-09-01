<div class="admin-container">
    
      
     
       <div class="admin-main">
       	
	       
	            <div class="widget-header">
	              <center><h3>Important Shortcuts</h3></center>
	            </div>
	            <!-- /widget-header -->
	            <div class="widget-content">
	              <div class="shortcuts">
		               <a class="shortcut" href="javascript:;"><span class="shortcut-label">News</span> <font color="red"><?php echo $this->news; ?></font></a>
		               <a class="shortcut" href="javascript:;"><span class="shortcut-label">Fav</span> </a>
		               <a class="shortcut" href="javascript:;"> <span class="shortcut-label">Stats</span> </a>
		               <a class="shortcut" href="javascript:;"> <span class="shortcut-label">Msg</span> <font color="red"><?php echo $this->msg; ?></font></a>
		               <a class="shortcut" href="javascript:;"><span class="shortcut-label">Users</span> </a>
		               <a class="shortcut" href="javascript:;"><span class="shortcut-label">Notes</span> </a>
		               <a class="shortcut" href="javascript:;"> <span class="shortcut-label">Photos</span> </a>
		               <a class="shortcut" href="javascript:;"> <span class="shortcut-label">Tags</span> </a> 
	               </div>
	              <!-- /shortcuts --> 
	            </div>
	           
	          </div>
	    
          
       </div>
 

     

dashboard.....


<br>

<form action="<?php echo URL; ?>dashboard/xhrInsert" method="post" id="randomInsert">
	<input type="text" name="text">
	<input type="submit">
</form>



<div id="listInserts">
	
</div>
      
      
 
  </div>