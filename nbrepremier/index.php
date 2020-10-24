<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php
         $a = 5;
        for($i = 2;$i<$a ;$i++){
        
        if($a%$i === 0){
            echo "non premier";
        } else{
             echo "premier";
        }
    }
      /* $nbr = 34;
       for ($i = 2; $i <($nbr) ; $i ++) { 
            $test = ($nbr)%($i);
             }
           if($test===0){
                echo "non premier";
           }else{
            echo "premier";
           }*/
    ?>
</body>
</html>