<html>
    <head>
        <title>RCC</title>
        <link rel="stylesheet"href="cadastro.css">
		<meta charset="utf-8">

    </head>
    
    <body>

    <?php
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $sexo=$_POST['sexo'];
    $dn=$_POST['dn'];
    $cpf=$_POST['cpf'];

    $sql="insert into cadastro(nome,telefone,sexo,dn,cpf)
    values('$nome','$telefone','$sexo','$dn','$cpf')";
    $con=mysqli_connect("127.0.0.1","root","","rcc");
    if (mysqli_connect_errno())
		  {  echo "Falha no banco de dados: " .  mysqli_connect_error();}
        mysqli_query($con,$sql);
		echo "<center><h2>Cadastro realizado com sucesso!</center></h2><p><br>";                
    mysqli_close($con);

    ?>

    <a class="voltar" href="index.htm">Voltar</a>
