<?php
require "database.php";

$username = $_GET["username"] ?? "";
$response = ["usato" => false];

if ($username !== "") {
    $stmt = $conn->prepare("SELECT id FROM utenti WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $response["usato"] = $stmt->num_rows > 0;
    $stmt->close();
}
echo json_encode($response);
