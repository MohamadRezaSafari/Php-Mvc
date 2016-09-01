



<div class="admin-container">

	<div class="admin-allnews">
		
		<div class="admin-allnews-full">
			<div class="news">
				<table width="100%">
					<tr class="title">
						<td align="center" width="80">شماره خبر</td>
						<td align="center" width="80">عنوان</td>
						<td align="center" width="300">متن کوتاه</td>
						<td align="center" width="40">عملیات</td>
						
					</tr>

					<?php

						foreach ($this->allnewslist as $key => $value) {
							

							echo "<tr>";

								echo "<td align='center' width='80'>". $value['id'] ."</td>";
								echo "<td align='center' width='80'>". $value['title'] ."</td>";
								echo "<td align='center' width='300'>". $value['short_text'] ."</td>";
								echo "<td align='center' width='40'><a href='".URL."allnews/delete/$value[id]'>حذف</a></td>";
						
							echo "</tr>";

						}
					?>
				</table>
			</div>
		</div>
	</div>

</div>