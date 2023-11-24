<html>
    <head>
        <title>RCC</title>
        <link rel="stylesheet"href="cadastro.css">
		<meta charset="utf-8">

    </head>
    
    <body>

    <?php
    $nome=$_POST['nome'];
    $sexo=$_POST['sexo'];
    $dia=$_POST['dia'];
    $mp=$_POST['mp'];

    $sql="insert into inscricao(nome,sexo,dia,mp)
    values('$nome','$sexo','$dia','$mp')";
    $con=mysqli_connect("127.0.0.1","root","","rcc");
    if (mysqli_connect_errno())
		  {  echo "Falha no banco de dados: " .  mysqli_connect_error();}
        mysqli_query($con,$sql);
		echo "<center><h2>Inscrição da Crew realizado com sucesso!</center></h2><p><br>";                
    mysqli_close($con);

    ?>

    <a class="voltar" href="inscricao.htm">Voltar</a>
