<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        //INSERT INTO cidade (nome, estado)
        //VALUES ('$nome', '$estado')

        $sql = "INSERT INTO cidade (nome, estado)";
        $sql .= " VALUES('".$nome."','".$estado."')";

    ?>
</body>
</html>