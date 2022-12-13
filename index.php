<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
</head>
<body>

<div class="container">
        <h2 class="text-center"> Lista de Usuarios <i class="bi bi-people-fill"></i> </h2>

        <h5 class="text-end">
            <a href="registro.php" class="btn btn-primary btn-xs">
                <i class="bi bi-person-plus-fill"></i>
            </a>
        </h5>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead">
                    <tr>

                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>CPF</th>
                    <th>DT. DE NASCIMENTO</th>
                    <th>ENDERECO</th>
                    <th>TELEFONE</th>
                    <th clospan="3">ACOES</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $comando = "select * from usuario";
                    $cone = mysqli_connect("localhost","root","","crud") or die ("Erro ao conectar ao banco de dados.");
                    $resultado = mysqli_query($cone,$comando);
                    $count=mysqli_num_rows($resultado);
                    while($row=mysqli_fetch_array($resultado))  { ?>
                        <tr>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['nome']; ?></td>
                            <td> <?php echo $row['email']; ?></td>
                            <td> <?php echo $row['cpf']; ?></td>
                            <td> <?php echo $row['datanascimento']; ?></td>
                            <td> <?php echo $row['endereco']; ?></td>
                            <td> <?php echo $row['telefone']; ?></td>
                            <td>
                                <a href=editar.php?id=<?php echo $row['id'] ?>>
                                <button clas="btn btn-danger btn-xs">
                                <i class="bi bi-pencil-square"></i>
                                </button>
                                </a>
                            </td>
                            <td>
                                <a onclick="return confirm('Tem certeza que deseja excluir?');" href=delete.php?id=<?php echo $row['id'] ?>>
                                <button clas="btn btn-danger btn-xs">
                                <i class="bi bi-trash"></i>
                                </button>
                                </a>
                            </td>
                        <?php }  ?>
                </tbody>
            </table>        
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
    
</body>
</html>