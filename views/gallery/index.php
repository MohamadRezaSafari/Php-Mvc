<div class="admin-container">

	<div class="gallery">
	
          
         

            <center>
            	<font color="#fff">
            		<h4>اپلود تصاویر</h4>
            	</font>
            </center>
					
				
            <div class="gallery-upload">

            	<form action="<?php echo URL; ?>gallery/upload" method="post" enctype="multipart/form-data">
                    
                    <input type="file" name="file" ><br>

            
                    <center>
                        <input type="submit" name="submit" value="آپلود">
                    </center>
                </form>

            </div>




         	<br>
          

         <div class="detail widget-content">
			<div class="gallery-details">
				

                    <?php 

                        foreach ($this->picture as $key => $value) {
                            @$pic = $this->picture[$key]['pic'];
                            @$id  = $this->picture[$key]['id'];
                            echo "<img src=".URL."public/upload/$pic"." >"; 
                            echo "<a href=".URL."gallery/delete/$id>حذف</a>";
                        }
                        
                    ?>

                
			</div>
		</div>







       
	</div>
</div>