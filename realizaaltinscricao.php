<?php
            $id=$_POST['id'];
            $nome=$_POST['nome'];
            $sexo=$_POST['sexo'];
            $dia=$_POST['dia'];
            $mp=$_POST['mp'];

            $sql="update inscricao set id='$id',nome='$nome',sexo='$sexo',dia='$dia',mp='$mp'
            where id=$id";

            $con=mysqli_connect("127.0.0.1","root","","rcc");
            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL: ". mysqli_connect_error();
            }
            mysqli_query($con,$sql);
            echo "<h2>Inscrição alterada com sucesso!</h2>"
        ?>
            
        <a href="listar_inscricao.php">Voltar</a>