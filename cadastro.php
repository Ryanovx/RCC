<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCC</title>
</head>
<body>
<?php
                $con = mysqli_connect("127.0.0.1", "root", "", "rcc");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result = mysqli_query($con, "SELECT * FROM cadastro");
                ?>

                    <table>
                        <caption>Lista de Clientes</caption>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Sexo</th>
                            <th>Data de Nascimento</th>
                            <th>CPF</th>
                            <th>Deletar</th>
                            <th>Alt</th>
                        </tr>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['nome'] ?>
                                </td>
                                <td>
                                    <?php echo $row['telefone'] ?>
                                </td>
                                <td>
                                    <?php echo $row['sexo'] ?>
                                </td>
                                <td>
                                    <?php echo $row['dn'] ?>
                                </td>                          
                                <td>
                                    <?php echo $row['cpf'] ?>
                                </td>
                                </td>
                                <td>
                                    <form action="realizadelcadastro.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                        <button type="submit" name="botdelcliente" value="ok" id="del">Deletar</button>
                                    </form>

                                </td>
                                <td>
                                    <form action="formaltcadastro.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                        <button type="submit" name="botaltcliente" value="ok" id="alt">Alterar</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                        mysqli_close($con);
                        ?>

                    </table>
</body>
</html>