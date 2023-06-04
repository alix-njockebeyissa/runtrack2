<?php
session_start();

if(isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
} else {
    $_SESSION['nbvisites'] = 1;
}

echo "Nombre de visites : ".$_SESSION['nbvisites'];

if(isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>
