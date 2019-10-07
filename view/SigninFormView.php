<?php
$title = "Signin";

ob_start();

?>
<form action="index.php" method="post">
	<label for="email">Email</label>
	<input type="text" name="signinEmail" required>
	<label for="password">Password</label>
	<input type="password" name="signinPassword" required>
	<label for="signinFName">Prénom</label>
	<input type="text" name="signinFName" required>
	<label for="signinLName">Nom</label>
	<input type="text" name="signinLName" required>
	<label for="rank">Rank</label>
	<input type="text" name="rank" required>
	<button type="submit">S'inscrire</button>
</form>



<?php
$content = ob_get_clean();

require 'view/template.php';