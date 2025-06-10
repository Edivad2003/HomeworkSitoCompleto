<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Registrazione</title>

</head>
<body>
  <h2>Registrati</h2>
  <form action="utente_iscritto.php" method="POST" id="form-registrazione">
    <input type="text" name="nome" placeholder="Nome" required><br>
    <input type="text" name="cognome" placeholder="Cognome" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="username" id="username" placeholder="Username" required><span id="user-check"></span><br>
    <input type="password" name="password" id="password" placeholder="Password" required><br>
    <button type="submit">Registrati</button>
  </form>

   <script src="script.js" defer></script>
  <script src="utente_iscritto.php"></script>
  <script src="iscrizione.php"></script>
  <script src="index.php"></script>
</body>
</html>
