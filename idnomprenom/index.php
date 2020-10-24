<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>test</title>
	 
</head>
<body>

<!-- <form method="POST" >
<input type="text" name="id"><br/>
<input type="text" name="nom"><br/>
<input type="text" name="prenom"><br/>
<input type="submit" >
</form> -->
 <center><form method="POST" >
 <label>id:</label>
<input type="Number" name="id"><br/>
<label>nom:</label>
<input type="text" name="nom"><br/>
<label>prenom:</label>
<input type="text" name="prenom"><br/>
<input type="submit" value="Ajouter">
</form></center>

 <?php
 	
 	$a =  $_POST["id"];
 	$b =  $_POST["nom"];
 	$c =  $_POST["prenom"];

 	 echo ($a);
 	  echo ($b);
 	   echo ($c);
 ?> 



</body>
</html>