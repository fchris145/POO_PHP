<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'erreur en PHP</title>
</head>

<body>
    <?php
    function calculerProduit($a, $b){
        if(!is_numeric($a) || !is_numeric($b)){
            throw new Exception("Attention il faut que les deux parametres soient des 
            nombres");
        }
        return $a * $b;
    }

    try {
        echo calculerProduit("hdhgyug", 7);
    } catch(Exception $e){
        echo "Message d'erreur : " .$e->getMessage(). "<br>";
        echo "Code d'erreur : " . $e->getCode() ."<br>";
        echo "URL d'erreur : " . $e->getFile() ."<br>";
        echo "Ligne d'erreur : " . $e->getLine() ."<br>";
    }

    

    ?>
</body>

</html>