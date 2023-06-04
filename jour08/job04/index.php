<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion'])) {
    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];

        setcookie('prenom', $prenom, time() + (86400 * 30), "/"); 
    }
}

if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";
    echo "<br>";
    echo '<form method="post"><input type="submit" name="deco" value="Déconnexion"></form>';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600, "/");
        header("Refresh:0"); 
    }

} else {
    echo '<form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" name="connexion" value="Connexion">
          </form>';
}
?>
