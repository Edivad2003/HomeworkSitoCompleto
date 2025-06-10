<?php
require "database.php";

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

// Validazione server password
if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/', $password)) {
    die("Password non valida");
}

// Hash
$hash = password_hash($password, PASSWORD_DEFAULT);

// Controllo username/email
$stmt = $conn->prepare("SELECT id FROM utenti WHERE username = ? OR email = ?");
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    die("Username o email già in uso");
}
$stmt->close();

// Inserimento
$stmt = $conn->prepare("INSERT INTO utenti (nome, cognome, email, username, password_hash) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nome, $cognome, $email, $username, $hash);
$stmt->execute();
$stmt->close();

session_start();
$_SESSION["utente"] = ["nome" => $nome, "cognome" => $cognome, "username" => $username];

header("Location: ReplicaPaginaEtnapolis.php");
exit;
