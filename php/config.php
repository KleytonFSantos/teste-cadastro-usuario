<?php
$host = 'localhost';
$dbname = 'postgres';
$user = 'postgres';
$password = 'teste123';

$conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($nome) || empty($email) || empty($senha)) {
        echo "Todos os campos são obrigatórios!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido!";
        exit;
    }

    if (strlen($senha) < 8) {
        echo "A senha deve conter pelo menos 8 caracteres!";
        exit;
    }

    $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nome, email, senha, data_criacao) VALUES (:nome, :email, :senha, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $hashedPassword);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário!";
    }
}
