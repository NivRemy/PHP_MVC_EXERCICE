<?php
$title = "3eme page";

ob_start();

?>
<h1>Page Inscrit</h1>
<select>
	
<?php
 foreach ($players as  $player) {
 	echo '<option >'. $player['surname'].'</option>';
 }

?>

</select>

<a href="index.php">Lien vers la page d'accueil</a>

<?php
$content = ob_get_clean();

require 'view/template.php';
