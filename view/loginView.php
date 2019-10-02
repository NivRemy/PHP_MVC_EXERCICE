<?php
$title = "Login";

ob_start();

?>
<form action="" method="post">
	<label for="email">Email</label>
	<input type="text" name="email" required>
	<label for="password">Password</label>
	<input type="password" name="password" required>
	<button type="submit">Se connecter</button>
</form>

<?php
$content = ob_get_clean();

require 'view/template.php';