<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Cidades</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM cidade";

        // Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>

    <div class="container">
        <h1>Consulta de Cidades</h1>
        <a href="CadastroCidade.html">Cadastrar nova Cidade</a><br>
        <a href="inicial.html">Voltar para a Tela Inicial</a>

        <table class="city-table">
            <tr>
                <th>Código</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
