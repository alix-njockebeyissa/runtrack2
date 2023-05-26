<!DOCTYPE html>
<html>
<head>
    <title>Affichage des nombres pairs et impairs</title>
</head>
<body>
<?php
$numbers = array(200, 204, 173, 98, 171, 404, 459);

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . " est paire<br />";
    } else {
        echo $number . " est impaire<br />";
    }
}
?>
</body>
</html>
