<?php
if(!empty($_POST)) {
	echo 'Saving ' . $_POST['username'];
}
?>
<form method="POST" action="form.php">
	<label>Name:</label>
	<input name="username">
	<input type="submit" value="Save" />
</form>