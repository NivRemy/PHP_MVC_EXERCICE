<?php
$title = "Deuxième page";

ob_start();

?>
<h1>Ma deuxième page</h1>
<p>Je n'ai toujours pas d'inspiration.</p>
<a href="index.php">Lien vers la page d'accueil</a>

<?php
$content = ob_get_clean();

require 'view/template.php';