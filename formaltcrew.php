<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RCC</title>
</head>
<body>
<?php
        $id= $_POST['id'];
        $con= mysqli_connect("127.0.0.1","root","","rcc");
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: ". mysqli_connect_error();
        }
        $result= mysqli_query($con,"SELECT * FROM crew WHERE id='$id'");
    ?>
        <form action="realizaaltcrew.php" method="post">
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <p>Nome da Crew:</p>
                        <input required type="text"name="nomeCrew"value="<?php echo $row['nomeCrew'];?>">
                <p>Quantidade de Participantes:</p>
                        <input required type="text"name="qtdParticipantes"value="<?php echo $row['qtdParticipantes'];?>">
                <p>Sexo:</p>
                        <input required type="text"name="sexo"value="<?php echo $row['sexo'];?>">
                <p>Cidade:</p>
                        <input required type="text"name="cidade"value="<?php echo $row['cidade'];?>">
                
               
                
                <button class="submit" type="submit" name="enviar" value="ok" id="btn">Alterar</button>
                <?php
                    }
                ?>
</body>
</html>