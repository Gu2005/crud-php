<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $comando = "delete from usuario where id=$id";
        $cone = mysqli_connect("localhost","root","","crud") or die ("Erro ao conectar ao banco de dados.");

        if(mysqli_query($cone,$comando)){
            header('location: index.php');
        }else{
            header('location: index.php');
        }
    }
?>