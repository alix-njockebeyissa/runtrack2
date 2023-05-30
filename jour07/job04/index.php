<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcule($nombre1, $operateur, $nombre2) {
        switch ($operateur) {
            case '+':
                return $nombre1 + $nombre2;
            case '-':
                return $nombre1 - $nombre2;
            case '*':
                return $nombre1 * $nombre2;
            case '/':
                if ($nombre2 != 0) {
                    return $nombre1 / $nombre2;
                } else {
                    return "Erreur : Division par zéro";
                }
            case '%':
                return $nombre1 % $nombre2;
            default:
                return "Erreur : Opérateur non valide";
        }
    }
    
    // Exemples d'appel de la fonction calcule()
    $resultat1 = calcule(5, '+', 3);    // Addition : 5 + 3 = 8
    $resultat2 = calcule(10, '*', 4);   // Multiplication : 10 * 4 = 40
    $resultat3 = calcule(8, '/', 2);    // Division : 8 / 2 = 4
    $resultat4 = calcule(12, '%', 5);   // Modulo : 12 % 5 = 2
    
    // Affichage des résultats
    echo $resultat1 . "<br>";
    echo $resultat2 . "<br>";
    echo $resultat3 . "<br>";
    echo $resultat4 . "<br>";
    ?>    
</body>
</html>