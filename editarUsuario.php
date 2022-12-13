<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $nome = $_POST["name"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $data = $_POST["birth"];
        $endereco = $_POST["address"];
        $telefone = $_POST["phone"];
        
        $comando = "update usuario set nome='$nome', email='$email', cpf='$cpf', datanascimento='$data', endereco='$endereco', telefone='$telefone' where id=$id";
        $cone = mysqli_connect("localhost","root","","crud") or die ("Erro ao conectar ao banco de dados.");

        if(mysqli_query($cone,$comando)){
            header('location: index.php');
        }else{
            header('location: index.php');
        }
    }
?>