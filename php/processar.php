<?php
 include 'conectar.php';

 $name = $_POST['name'];
 $cpf = $_POST['cpf'];
 $address = $_POST['address'];
 $age = $_POST['age'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 // Inserir ao banco
 $sql = "INSERT INTO LOGIN (nome, cpf, endereco, idade, email, senha) VALUES ('$name', '$cpf', '$address', '$age', '$email', '$password')";

 if ($conexao->query($sql) === TRUE) {
    echo "login realizado com sucesso!";
 } else {
    echo "Erro." . $conexao->error;
 }

 $conexao->close();
?>