<?php
session_start();
require "database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, nome, cognome, password_hash FROM utenti WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $nome, $cognome, $hash);
    if ($stmt->fetch() && password_verify($password, $hash)) {
        $_SESSION["utente"] = ["nome" => $nome, "cognome" => $cognome, "username" => $username];
        header("Location: index.php");
    } else {
        echo "Credenziali non valide.";
    }
    $stmt->close();
}
?>

<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button>
</form>
