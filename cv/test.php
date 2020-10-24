
<?php
$nom=$_GET["nom"];
if ($nom=="Gerard")
{
	include("Gerard.php");
} else
{
	echo '<a href="index.php">retour</a>';
}
?>