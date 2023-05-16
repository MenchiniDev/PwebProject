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
// Configurazione di connessione al database
$servername = "localhost"; // Indirizzo del server MySQL
$username = "username"; // Nome utente per l'accesso al database
$password = "password"; // Password per l'accesso al database
$dbname = "database"; // Nome del database

// Connessione al server MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se la connessione ha avuto successo
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Esempio di query
$sql = "SELECT * FROM tabella";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Elaborazione dei risultati
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";
    }
} else {
    echo "Nessun risultato trovato.";
}

// Chiusura della connessione al database
$conn->close();
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
</html>