<?php
$title = "Première page";

ob_start();

?>
<h1>Ma première page</h1>
<p>Je n'ai vraiment pas d'inspiration pour y mettre quelque chose.</p>
<a href="index.php">Lien vers la page d'accueil</a>

<?php
$content = ob_get_clean();

require 'view/template.php';