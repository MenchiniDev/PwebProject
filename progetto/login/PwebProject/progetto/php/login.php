<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once('costanti.php');


try {
    $pdo = new PDO(CONNECTION, USER, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Errore durante la connessione al database: " . $e->getMessage();
}
?>


    <div class="top-bar">
    <div class="dropdown">
        <span>Menu</span>
        <div class="dropdown-content">
        <a href="doveSiamo.php">Dove siamo</a>
        <a href="Orari.php">Orari</a>
        </div>
    </div>
    </div>
    <div id="center-content">
    <h2>Login</h2>
    <form action="controlLogin.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Accedi">
    <h3>non sei iscritto?<a href="signup.php">iscriviti!</a></h3>
    </form>
    </div>
</body>

<?php 
    $conn->close(); 
?>
</html>