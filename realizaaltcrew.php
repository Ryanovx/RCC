<?php
            $id=$_POST['id'];
            $nomeCrew=$_POST['nomeCrew'];
            $qtdParticipantes=$_POST['qtdParticipantes'];
            $sexo=$_POST['sexo'];
            $cidade=$_POST['cidade'];

            $sql="update crew set id='$id',nomeCrew='$nomeCrew',qtdParticipantes='$qtdParticipantes',sexo='$sexo',cidade='$cidade'
            where id=$id";

            $con=mysqli_connect("127.0.0.1","root","","rcc");
            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL: ". mysqli_connect_error();
            }
            mysqli_query($con,$sql);
            echo "<h2>Crew alterada com sucesso!</h2>"
        ?>
            
        <a href="listar_crew.php">Voltar</a>