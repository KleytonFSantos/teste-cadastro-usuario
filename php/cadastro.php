<?php
require 'config.php';

try {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if (empty($nome) || empty($email) || empty($senha)) {
        throw new Exception("Todos os campos são obrigatórios.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("O email inserido não é válido.");
    }

    if (strlen($senha) < 8) {
        throw new Exception("A senha deve conter pelo menos 8 caracteres.");
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        throw new Exception("Erro ao cadastrar usuário. Tente novamente.");
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
