<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style3.css">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        echo "<h1>Dados do cliente</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Senha: $senha<br>";

        //INSERT INTO cidade (nome, estado)
        //VALUES ('$nome', '$estado')

        $sql = "INSERT INTO cliente (nome, email, senha)";
        $sql .= " VALUES('".$nome."','".$email."','".$senha."')";
        echo $sql;

        //executa comando no banco de dados
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar</h2>";
            echo mysqli_error($con);
        }
    ?>
    <h3><a href="ListarCliente.php">Ver na Tabela</a></h3>
    <h3><a href="CadastroCliente.html">Voltar</a></h3>
</body>
</html>