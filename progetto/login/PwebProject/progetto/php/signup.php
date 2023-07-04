<!DOCTYPE html>
<html>
<head>
  <title>Form di Login</title>
  <script src="validazione.js"></script>
</head>
<body>
  <?php
  // Verifica se il form è stato inviato
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    // Verifica se le password corrispondono
    if ($password1 === $password2) {
      // Le password corrispondono, procedi con l'elaborazione o il reindirizzamento
      // Puoi inserire qui il tuo codice per l'elaborazione dei dati di login
      echo "Benvenuto, $username! Accesso consentito.";
    } else {
      // Le password non corrispondono, mostra un messaggio di errore
      echo "Le password non corrispondono. Riprova.";
    }
  }
  ?>

  <h2>Registrazione</h2>
  <form id="form1">
    <label for="username">Nome utente:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password1">Password:</label>
    <input type="password" id="password1" name="password1" required><br><br>

    <label for="password2">Conferma password:</label>
    <input type="password" id="password2" name="password2" required><br><br>

    <input type="submit" value="Registrati">
  </form>
</body>
</html>
