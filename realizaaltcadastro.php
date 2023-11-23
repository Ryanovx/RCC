<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCC</title>
</head>
<body>
<?php
            $id=$_POST['id'];
            $nome=$_POST['nome'];
            $telefone=$_POST['telefone'];
            $sexo=$_POST['sexo'];
            $dn=$_POST['dn'];
            $cpf=$_POST['cpf'];

            $sql="update cadastro set id='$id',nome='$nome',telefone='$telefone',sexo='$sexo',dn='$dn',cpf='$cpf'
            where id=$id";

            $con=mysqli_connect("127.0.0.1","root","","rcc");
            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL: ". mysqli_connect_error();
            }
            mysqli_query($con,$sql);
            echo "<h2>Cadastro alterado com sucesso!</h2>"
        ?>
            
        <a href="cadastro.htm">Voltar</a>
</body>
</html>