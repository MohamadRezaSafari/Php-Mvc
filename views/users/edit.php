


<form method="post" action="<?php echo URL; ?>users/editSave/<?php echo $this->user['id']; ?>">
	<label>Login</label><input type="text" name="login" value="<?php echo $this->user['login']; ?>">
	<label>Password</label><input type="text" name="password">
	<label>Role</label>
	<select name="role">
		<option value="default" <?php if($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
		<option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
	</select>
	<input type="submit">
</form>