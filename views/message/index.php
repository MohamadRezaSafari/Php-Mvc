

<div class="admin-container">
	<div class="news">
			<table width="100%">
				<tr class="th">
					<td align="center" width="10%">نام</td>
					<td align="center" width="50%">ایمیل</td>
					<td align="center" width="40%">عملیات</td>
				</tr>
				<?php

					foreach ($this->messagelist as $key => $value) {
						

						echo "<tr class='tr2'>";
						
							echo "<td width='10%'>".$value['name']."</td>"	;
							echo "<td width='150%'>".$value['email']."</td>";
							echo "<td width='40%'><a href='". URL. "message/details/$value[id]'>اطلاعات</a>&nbsp&nbsp&nbsp<a href='". URL. "message/delete/$value[id]'>حذف</a></td>";

						echo "</tr>";

					}
				?>
			</table>

			

			
		</div>
</div>