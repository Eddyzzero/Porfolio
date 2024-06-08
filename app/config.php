<!-- recupere la db -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mon_porfolio";

// creer une connexion 
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Impossible de se connecter : " . $e->getMessage());
}
?>

