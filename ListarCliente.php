<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Cidades</title>
    <link rel="stylesheet" href="style/style2.css">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM cliente";

        // Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>

    <div class="container">
        <h1>Consulta de Clientes</h1>
        <a href="CadastroCliente.html">Cadastrar novo Cliente</a><br>
        <a href="inicial.html">Voltar para a Tela Inicial</a>

        <table class="city-table">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php //mysqli_fetch_array lê uma linha por vez
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['senha']."</td>";
                    echo "<td><a href='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='deletaCliente.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
