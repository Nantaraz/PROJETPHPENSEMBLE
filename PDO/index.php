<!DOCTYPE html>
<html>
<head>
	<title>PHP MYSQL</title>
</head>
<body>

	<form method="POST" >

<label>nom:</label>
<input type="text" name="nom"><br/>
<label>prenom:</label>
<input type="text" name="prenom"><br/>
<input type="submit" value="Ajouter">
</form>
</body>
</html>


	<?php
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', 'nanta');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}

//poster table
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$req = $bdd->prepare('INSERT INTO eleve(nom, prenom) VALUES(:nom,:prenom)');
$req->execute(array(
'nom' => $nom,
'prenom' => $prenom,
));


//get table
$reponse = $bdd->query('SELECT * FROM eleve');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
//var_dump($donnees[id]);
{?>

<!-- <p>
<strong>Id</strong> : <?php echo $donnees['id']; ?><br />
<strong>Nom</strong> : <?php echo $donnees['nom']; ?><br />
<strong>Prenom</strong> : <?php echo $donnees['prenom']; ?><br />
<button >modifier</button>
</p> -->
<table>
		<th>Id</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Actions</th>
		<tbody>
		<td> <?php echo $donnees['id']; ?></td>
		<td><a href="cv"><?php echo $donnees['nom']; ?></a></td>
		<td><?php echo $donnees['prenom']; ?></td>
		<td><button >modifier</button><button >supprimer</button></td>
		</tbody>
</table>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

