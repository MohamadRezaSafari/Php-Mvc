<div class="admin-container">



	<div class="add">

		<form action="<?php echo URL; ?>news/add" method="post" enctype="multipart/form-data">
			
			<label>عنوان خبر</label>
			<input type="text" name="title" required><br>

			<label>متن کوتاه</label>
			<textarea name="short_text" required></textarea><br>

			<label>متن  کامل</label>
			<textarea name="long_text" required></textarea><br>

			<label>اپلود تصاویر</label>
			<input type="file" name="file[]"  multiple="multiple"><br>

	
			<center>
				<input type="submit" name="submit" value="ثبت خبر">
			</center>
		</form>

	</div>

	<br><br>


	<div class="">
		
		<div class="">
			<div class="news-five">
				<table width="100%">
					<tr class="title">
						<td align="center" width="80">شماره خبر</td>
						<td align="center" width="80">عنوان</td>
						<td align="center" width="300">متن کوتاه</td>
						
					</tr>

					<?php

						foreach ($this->newslist as $key => $value) {
							

							echo "<tr>";

								echo "<td align='center' width='80'>". $value['id'] ."</td>";
								echo "<td align='center' width='80'>". $value['title'] ."</td>";
								echo "<td align='center' width='300'>". $value['short_text'] ."</td>";
						
							echo "</tr>";

						}
					?>
				</table>
			</div>
		</div>
	</div>




</div>

