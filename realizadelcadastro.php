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
            $sql = "delete from cadastro where id='$id'";
            $con = mysqli_connect("localhost","root","","rcc");
            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL: ". mysqli_connect_error();
            }
            mysqli_query($con,$sql);
            echo "<h2>Cadastro deletado com sucesso!</h2>";
            mysqli_close($con);
        ?>
            
        <a href="cadastro.php">Voltar</a>
</body>
</html>