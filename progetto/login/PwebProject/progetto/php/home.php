<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="top-nav">
    <?php
    session_start();
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // L'utente è loggato
        echo "<h1 id=\"logged\">Benvenuto, " . $_SESSION['username'] . "</h1>";
    } else {
        // L'utente non è loggato, reindirizza alla pagina di accesso o effettua un'altra azione appropriata
        header("Location: login.php");
        exit;
    }
    ?>
    <h3> <a href="nuovaScheda.php">Aggiungi o modifica <br> una scheda!</a></h3>
    </div>
    <h4>numero schede totale: <h4 id="nSchede">0</h4></h4>
</body>
</html>