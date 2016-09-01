<h2>User</h2>


<form method="post" action="<?php echo URL; ?>user/create">
	<label>Login</label><input type="text" name="login">
	<label>Password</label><input type="text" name="password">
	<label>Role</label>
	<select name="role">
		<option value="default">Default</option>
		<option value="admin">Admin</option>
	</select>
	<input type="submit">
</form>

	<hr>

<table>
	<?php 
	
		foreach ($this->userList as $key => $value) {
			
			echo "<tr>";
				echo "<td>". $value['id'] ."</td>";
				echo "<td>". $value['login'] ."</td>";
				echo "<td>". $value['role'] ."</td>";
				echo "<td><a href='".URL."user/edit/$value[id]'>Edit</a>   <a href='".URL."user/delete/$value[id]'>Delete</a></td>";
			echo "</tr>";
			

		}
	
	?>
</table>
