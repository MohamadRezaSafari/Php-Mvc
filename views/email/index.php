
<meta charset="utf8">
<div class="email">
	<form action="<?php echo URL; ?>email/send" method="post">
		<label>ایمیل دریافت کننده</label><br>
		<input type="email" name="email" required><br><br>

		<label>ایمیل ارسال کننده</label><br>
		<input type="email" name="emailsender" required><br><br>

		<label>عنوان</label><br>
		<input type="text" name="title" required><br><br>

		<label>متن پیام</label><br>
		<input type="text" name="text" required><br><br><br>


		<input type="submit" name="email" value="ارسال">
	</form>
</div>

