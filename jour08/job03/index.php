<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];

        if (isset($_SESSION['prenoms'])) {
            $_SESSION['prenoms'][] = $prenom;
        } else {
            $_SESSION['prenoms'] = array($prenom);
        }
    }
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
}

if (isset($_SESSION['prenoms'])) {
    echo "Liste des prénoms : ";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . " ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un prénom</title>
</head>
<body>
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <input type="submit" value="Ajouter">
    </form>

    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>
