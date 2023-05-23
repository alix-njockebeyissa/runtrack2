<?php
    $boolVar = true;
    $intVar = 42;
    $strVar = "Hello";
    $floatVar = 3.14;

    $tableauVariables = array(
        array("type" => "booléen", "nom" => "boolVar", "valeur" => $boolVar),
        array("type" => "entier", "nom" => "intVar", "valeur" => $intVar),
        array("type" => "chaîne de caractères", "nom" => "strVar", "valeur" => $strVar),
        array("type" => "nombre à virgule flottante", "nom" => "floatVar", "valeur" => $floatVar)
    );
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informations sur les variables</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableauVariables as $variable) : ?>
                <tr>
                    <td><?php echo $variable["type"]; ?></td>
                    <td><?php echo $variable["nom"]; ?></td>
                    <td><?php echo $variable["valeur"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>