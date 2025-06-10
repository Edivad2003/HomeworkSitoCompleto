<?php
require "db.php";
header('Content-Type: application/json');

$sql = "SELECT * FROM negozi";
$result = $conn->query($sql);

$negozi = [];
while ($row = $result->fetch_assoc()) {
    $negozi[] = $row;
}
echo json_encode($negozi);
