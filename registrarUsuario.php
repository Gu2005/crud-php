<?php

    $nome = $_POST["name"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $data = $_POST["birth"];
    $endereco = $_POST["address"];
    $telefone = $_POST["phone"];

    $comando = "insert into usuario (nome,email,cpf,datanascimento,endereco,telefone) values ('$nome','$email','$cpf','$data','$endereco','$telefone')";
    $cone = mysqli_connect("localhost","root","","crud") or die ("Erro ao conectar ao banco de dados.");

    if(mysqli_query($cone,$comando)){
        header('location: index.php');
    }else{
        header('location: index.php');
    }
?>