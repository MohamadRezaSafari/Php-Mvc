<h2>User</h2>


<form method="post" action="<?php echo URL; ?>users/create">
	<label>Login</label><input type="text" name="login">
	<label>Password</label><input type="text" name="password">
	<select name="role">
		<option value="default">Default</option>
		<option value="admin">Admin</option>
	</select>
	<br>
	<input type="submit">
</form>

	<hr>

<table>
	<?php 
	
		foreach ($this->userList as $key => $value) {
			if($value['role'] != 'owner'){
			echo "<tr>";
				echo "<td>". $value['id'] ."</td>";
				echo "<td>". $value['login'] ."</td>";
				echo "<td>". $value['role'] ."</td>";
				echo "<td><a href='".URL."users/edit/$value[id]'>Edit</a>   <a href='".URL."users/delete/$value[id]'>Delete</a></td>";
			echo "</tr>";
			}

		}
	
	?>
</table>
