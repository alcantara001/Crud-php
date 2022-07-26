<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Carros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <form action="verificaCadastro.php" method="post">
            <h1>Cadastro do Veículo</h1>
            Modelo: <input type="text" name="txtnome" placeholder="Digite o Modelo"><br>
            Marca: <input type="text" name="txtmarca" placeholder="Digite a Marca"><br>
            Cor: <input type="text" name="txtcor" placeholder="Digite a cor"><br>
            Ano: <input type="text" name="txtano" placeholder="Digite ano"><br>
            Quilometragem: <input type="text" name="txtquilometragem" placeholder="Digite a Quilometragem"><br>
            Preco: <input type="text" name="txtpreco" placeholder="Digite a Preco"><br>

            <input type="submit" value="Cadastrar" name="btn"><br>

        </form>
    </center>
</body>
</html>