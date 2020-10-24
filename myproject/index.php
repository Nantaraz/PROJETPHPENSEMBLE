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
 <label>nombre1:</label>
<input type="Number" name="nb1"><br/>
<label>nombre2:</label>
<input type="Number" name="nb2"><br/>
<input type="submit" value="somme">
</form></center>

 <?php
 	
 	$a =  $_POST["nb1"];
 	$b =  $_POST["nb2"];

 	 echo '<center><h1>'."Resultat = ".($b + $a).'</h1></center>';
 ?> 


 <center><form method="POST" >
 <label>nombre3:</label>
<input type="Number" name="nombre3"><br/>
<label>nombre4:</label>
<input type="Number" name="nombre4"><br/>
<input type="submit" value="multiplication">
</form></center>


 <?php

 	$c =  $_POST["nombre3"];
 	$d =  $_POST["nombre4"];

 	echo '<center><h1>'."Resultat = ".($c * $d).'</h1></center>';

 ?> 



</body>
</html>