<html>
    <head>
        <title>RCC</title>
        <link rel="stylesheet"href="cadastro.css">
		<meta charset="utf-8">

    </head>
    
    <body>

    <?php
    $nomeCrew=$_POST['nomeCrew'];
    $qtdParticipantes=$_POST['qtdParticipantes'];
    $sexo=$_POST['sexo'];
    $cidade=$_POST['cidade'];

    $sql="insert into crew(nomeCrew,qtdParticipantes,sexo,cidade)
    values('$nomeCrew','$qtdParticipantes','$sexo','$cidade')";
    $con=mysqli_connect("127.0.0.1","root","","rcc");
    if (mysqli_connect_errno())
		  {  echo "Falha no banco de dados: " .  mysqli_connect_error();}
        mysqli_query($con,$sql);
		echo "<center><h2>Cadastro da Crew realizado com sucesso!</center></h2><p><br>";                
    mysqli_close($con);

    ?>

    <a class="voltar" href="crew.htm">Voltar</a>
