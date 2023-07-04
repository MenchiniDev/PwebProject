<?php

// Verifica della connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i valori dalla form
    $nome = $_POST["username"];
    $password = $_POST["password1"];
    $passwordControl = $_POST["password2"];

    if($password === $passwordControl)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Query per inserire i dati nella tabella "users"
    $sql = "INSERT INTO users (nome, password) VALUES ('$nome', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
            echo "Dati inseriti nel database con successo.";
            session_start();
            // Dopo aver verificato le credenziali dell'utente e accettato l'accesso
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $nome;
            header("Location: home/home.php");
        } else {
            echo "Errore durante l'inserimento dei dati nel database: " . mysqli_error($conn);
        }
    } else
    {
        echo "le password non corrispondono!";
    }
}

// Chiudi la connessione
mysqli_close($conn);
?>
