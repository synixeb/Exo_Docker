<?php
// Connexion à la base de données MySQL
$servername = "db";
$username = "root";
$password = "example";
$dbname = "my_database";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $sql = "INSERT INTO messages (message) VALUES ('$message')";
    if ($conn->query($sql) === false) {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h1>Ajouter un message</h1>
<form action="index.php" method="post">
    <input type="text" name="message">
    <input type="submit">
</form>

<?php
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Messages:";
    echo "<ul>";
        // Sortie des données de chaque ligne
        foreach($result as $row) {
            echo "<li> (id)=". $row['id'] . " " . $row['message'] . "</li>";
        }
    echo "</ul>";
} else {
    echo "0 resultats";
}
$conn->close();