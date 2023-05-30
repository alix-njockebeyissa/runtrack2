<?php
function mettreEnGras($str) {
    $mots = explode(" ", $str);
    $resultat = "";

    foreach ($mots as $mot) {
        if (ctype_upper(substr($mot, 0, 1))) {
            $resultat .= "<b>" . $mot . "</b> ";
        } else {
            $resultat .= $mot . " ";
        }
    }

    return $resultat;
}

function decaleCesar($str, $decalage = 2) {
    $resultat = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $caractere = $str[$i];

        if (ctype_alpha($caractere)) {
            $ascii = ord($caractere);
            $ascii += $decalage;
            
            if (ctype_upper($caractere)) {
                $ascii = ($ascii > 90) ? ($ascii - 26) : $ascii;
            } else {
                $ascii = ($ascii > 122) ? ($ascii - 26) : $ascii;
            }

            $caractere = chr($ascii);
        }

        $resultat .= $caractere;
    }

    return $resultat;
}

function ajouterUnderscore($str) {
    $mots = explode(" ", $str);
    $resultat = "";

    foreach ($mots as $mot) {
        if (substr($mot, -2) === "me") {
            $resultat .= $mot . "_";
        } else {
            $resultat .= $mot . " ";
        }
    }

    return $resultat;
}

if (isset($_POST['submit'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    $resultat = "";

    switch ($fonction) {
        case 'gras':
            $resultat = mettreEnGras($str);
            break;
        case 'cesar':
            $decalage = isset($_POST['decalage']) ? intval($_POST['decalage']) : 2;
            $resultat = decaleCesar($str, $decalage);
            break;
        case 'plateforme':
            $resultat = ajouterUnderscore($str);
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de transformation de chaîne de caractères</title>
</head>
<body>
    <h1>Formulaire de transformation de chaîne de caractères</h1>
    <form method="POST" action="">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" name="str" id="str" required>
        <br>

        <label for="fonction">Option de transformation :</label>
        <select name="fonction" id="fonction" required>
            <option value="gras">Mettre en gras les mots commençant par une majuscule</option>
            <option value="cesar">Décaler les caractères selon le décalage César</option>
