<?php
extension=mysqli;

$servername = "localhost";
$username = "root";
$password ="";
$dbname= "cadastro_vox"

$conn = new mysqli($servername, $username, $password, $dbname);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['password'];

$stmt->close();
$conn->close();
?>
