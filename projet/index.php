<h1>Pendu</h1>
<form action="index.php" method="post">
    <input type="text" name="lettre" maxlength="1" required>
    <input type="submit" value="Proposer">
</form>

<?php
$MAX_ERREURS = 10;

session_start();
if (!isset($_SESSION['erreur'])) {
    $_SESSION['erreur'] = 0;
}
if (!isset($_SESSION['mot'])) {
    $mots = ['bonjour', 'pendu', 'ordinateur', 'tableau', 'chaise'];
    $_SESSION['mot'] = $mots[array_rand($mots)];
}
if (!isset($_SESSION['lettres'])) {
    $_SESSION['lettres'] = str_repeat('_', strlen($_SESSION['mot']));
}

function afficherMot($lettre) {
    $affichage = '';
    for ($i = 0; $i < strlen($_SESSION['mot']); $i++) {
        $current = $_SESSION['mot'][$i];
        if ($current == $lettre ) {
            $affichage .= $current;
        } else {
            $affichage .= $_SESSION['lettres'][$i];
        }
    }
    $_SESSION['lettres'] = $affichage;
    return $affichage;
}

if (isset($_POST['lettre'])) {
    $lettre = $_POST['lettre'];
    if (!str_contains($_SESSION['mot'], $lettre)) {
        $_SESSION['erreur']++;
        if ($_SESSION['erreur'] >= $MAX_ERREURS) {
            echo '<p>Perdu !</p>';
            echo '<p>Le mot était : ' . $_SESSION['mot'] . '</p>';
            session_destroy();
            exit;
        }
    }

    echo '<p>' . afficherMot($lettre) . '</p>';
    echo '<p>Erreurs : ' . $_SESSION['erreur'] . '</p>';

    if ($_SESSION['lettres'] == $_SESSION['mot']) {
        echo '<p>Bravo !</p>';
    }
}


