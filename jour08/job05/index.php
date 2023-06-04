<?php
session_start();

if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = [
        ['-','-','-'],
        ['-','-','-'],
        ['-','-','-']
    ];
}

function checkWinner() {
    $grille = $_SESSION['grille'];

    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] !== '-' && $grille[$i][0] === $grille[$i][1] && $grille[$i][0] === $grille[$i][2]) {
            return $grille[$i][0];
        }
    }

    for ($j = 0; $j < 3; $j++) {
        if ($grille[0][$j] !== '-' && $grille[0][$j] === $grille[1][$j] && $grille[0][$j] === $grille[2][$j]) {
            return $grille[0][$j];
        }
    }

    if ($grille[0][0] !== '-' && $grille[0][0] === $grille[1][1] && $grille[0][0] === $grille[2][2]) {
        return $grille[0][0];
    }

    if ($grille[0][2] !== '-' && $grille[0][2] === $grille[1][1] && $grille[0][2] === $grille[2][0]) {
        return $grille[0][2];
    }

    foreach ($grille as $row) {
        if (in_array('-', $row)) {
            return null;
        }
    }

    return 'Match nul';
}

function resetGame() {
    unset($_SESSION['grille']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reset'])) {
        resetGame();
    } else {
        $row = $_POST['row'];
        $col = $_POST['col'];

        if ($_SESSION['grille'][$row][$col] === '-') {
            $_SESSION['grille'][$row][$col] = $_SESSION['joueur'];

            $_SESSION['joueur'] = ($_SESSION['joueur'] === 'X') ? 'O' : 'X';
        }

        $resultat = checkWinner();
        if ($resultat !== null) {
            echo "<script>alert('$resultat a gagné !');</script>";
            resetGame();
        }
    }
}

if (!isset($_SESSION['joueur'])) {
    $_SESSION['joueur'] = 'X';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeu du morpion</title>
</head>
<body>
    <table>
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++) { ?>
                    <td>
                        <form method="post">
                            <input type="hidden" name="row" value="<?php echo $i; ?>">
                            <input type="hidden" name="col" value="<?php echo $j; ?>">
                            <button type="submit" <?php if ($_SESSION['grille'][$i][$j] !== '-') { echo 'disabled'; } ?>>
                                <?php echo $_SESSION['grille'][$i][$j]; ?>
                            </button>
                        </form>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser la partie">
    </form>
</body>
</html>
