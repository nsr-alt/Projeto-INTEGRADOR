<?php
 include 'conectar.php';

 $nome = $_POST['nome'];
 $cpf = $_POST['cpf'];
 $address = $_POST['address'];
 $age = $_POST['age'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 // Inserir ao banco
 $sql = "INSERT INTO contatos (nome, cpf, endereco, idade, email, senha) VALUES ('$nome', '$cpf', '$address', '$age', '$email', '$password')";

 if ($conexao->query($sql) === TRUE) {
    echo "Mensagem enviadada com sucesso!";
 } else {
    echo "Erro." . $conexao->error;
 }

 $conexao->close();
?>