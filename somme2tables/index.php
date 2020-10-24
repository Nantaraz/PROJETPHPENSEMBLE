<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        $a = array(5, 7, 1, 1);
        $b = array(1, 7, 1, 9, 10);
        //$tab = array();
        $tsy = array();
        if ($a <$b) {
            $tab = $a;
        }else{
            $tab = $b;
        }

        for ($i=0; $i < count($tab); $i++) { 
            $tsy  =  ($a[$i] +  $b[$i]) ;
            echo ($tsy. '  ');
        }
        
        for ($k=$i; $k < count($a) ; $k++) { 
            $tsy  =  ($a[$k] ) ;
            echo($tsy. '<br>');
        }
        for ($k=$i; $k < count($b) ; $k++) { 
            $tsy  =  ($b[$k] ) ;
            echo($tsy. '<br>');
        }
        
        /*if ($a<$b){
            $max = $b;
        }else{
            $max = $a;
        }
        for($i=0;$i<count($max);$i++){
            $tab.push(($a[$i] || 0) + ($b[$i] || 0));
            echo ($tab. '  ');
        }*/
    ?>
</body>
<script>

</script>
</html>