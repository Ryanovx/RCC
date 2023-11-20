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

                        <input required type="text"name="nome"value="<?php echo $row['pedido'];?>"><p>Pedido:</p>
                
                        <input required type="text"name="metodoPagamento"value="<?php echo $row['metodoPagamento'];?>"><p>Método de Pagamento:</p>
               
                
                <button class="submit" type="submit" name="enviar" value="ok" id="btn">Alterar</button>
                <?php
                    }
                ?>
    
</body>
</html>