<?php
$title = "Accueil";

ob_start();

?>
<h1>Super page accueil!</h1>
<p>Du texte aléatoire</p>
<a href="index.php?page=1">Lien vers la page 1</a>
<br>
<a href="index.php?page=2">Lien vers la page 2</a>
<br>
<a href="index.php?login=1">Lien vers le formulaire</a>
<br>
<a href="index.php?signin=1">Créer un compte</a>
<?php
$content = ob_get_clean();

require 'view/template.php';