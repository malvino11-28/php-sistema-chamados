<?php
$serverName = $_ENV["SERVERNAME"];
$username = $_ENV["USERNAME"];
$password = $_ENV["PASSWORD"];
$dbname = $_ENV["DBNAME"];

$conn = new mysqli($serverName, $dbname, $username, $password);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>