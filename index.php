<?php

    $stringa = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nemo sequi ipsam molestias earum facilis incidunt ipsum nesciunt possimus tempora voluptate quasi in explicabo magnam, eos assumenda delectus recusandae veritatis.';
    
    if(isset($_GET['parolaUtente'])){
        
        $parolaUtente = $_GET['parolaUtente'];

        $stringa = str_replace($parolaUtente, "***", $stringa);
    };

    $stringaFinale = str_replace(" ", "", $stringa);

    $stringaLength = strlen($stringaFinale);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Stampo la stringa e la sua lunghezza -->
    <h1><?php echo "Il paragrafo "  . "'" . $stringa . "'" . " e' lungo "  . $stringaLength . " caratteri!"; ?></h1>
</body>
</html>