<?php
$servername = "localhost"; // Nome del server
$username = "root"; // Nome utente del database
$password = ""; // Password del database
$dbname = "Progetto615580"; // Nome del database

// Connessione al database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica della connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i valori dalla form
    $nome = $_POST["username"];
    $password = $_POST["password"];

    // Query per inserire i dati nella tabella "users"
    $sql = "SELECT * FROM users WHERE nome = '$nome'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];
        echo $hashedPassword;
    
    if (password_verify($password, $hashedPassword)) {
        // Credenziali valide, l'utente può accedere
        echo "Accesso riuscito!";
        session_start();
        // Dopo aver verificato le credenziali dell'utente e accettato l'accesso
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $nome; // Memorizza il nome utente dell'utente loggato

        header("Location: home/home.php");
    } else {
        // Password non corretta
        echo "Password non valida!";
    }
    } else {
    // Utente non trovato
        echo "Username non valido!";
        
    }

}

// Chiudi la connessione
mysqli_close($conn);
?>
