<!DOCTYPE html>
<html lang="en">
<head>
<title>RCC</title>
</head>
<body>

 <?php
        $id= $_POST['id'];
        $con= mysqli_connect("127.0.0.1","root","","rcc");
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: ". mysqli_connect_error();
        }
        $result= mysqli_query($con,"SELECT * FROM cadastro WHERE id='$id'");
    ?>
        <form action="realizaaltcadastro.php" method="post">
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <p>Nome da Crew:</p>
                        <input required type="text"name="nome"value="<?php echo $row['nome'];?>">
                <p>Telefone:</p>
                        <input required type="text"name="telefone"value="<?php echo $row['telefone'];?>">
                <p>Sexo:</p>
                        <input required type="text"name="sexo"value="<?php echo $row['sexo'];?>">
                <p>Data de Nascimento:</p>
                        <input required type="text"name="dn"value="<?php echo $row['dn'];?>">
                <p>CPF:</p>
                        <input required type="text"name="cpf"value="<?php echo $row['cpf'];?>">
                

                <button class="submit" type="submit" name="enviar" value="ok" id="btn">Alterar</button>
                <?php
                    }
                ?>
    
</body>
</html>