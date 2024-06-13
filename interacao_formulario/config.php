<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sistema";

// Criação da conexão
$conn = new mysqli($servername,$username,$password,$dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("falha na conexão: " . $conn->connect_error);
}
?>