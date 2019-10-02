<?php
$title = "Résultat login";

ob_start();

?>
<h1>vous êtes loggé!</h1>
<p>Bonjour, vous êtes connecté en tant que: <?= $email ;?> avec le mdp <?= $password;?></p>
<a href="index.php">Lien vers la page d'accueil</a>

<?php
$content = ob_get_clean();

require 'view/template.php';