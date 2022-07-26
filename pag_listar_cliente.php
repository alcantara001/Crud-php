<!DOCTYPE html>
<?php
    include ("conexao.php");
    include ("banco-cliente.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Carros</title>
    <link rel="stylesheet" href="style02.css">
</head>
<body>
    <center>
        <div>
        <h1>Clientes Cadastrados</h1>
        <table>
            <tr>
                <td>Id</td>
                <td>Modelo</td>
                <td>Marca</td>
                <td>Cor</td>
                <td>Ano</td>
                <td>Quilometragem</td>
                <td>Preço</td>
                <td>Excluir</td>
                <td>Alterar</td>
            </tr>
            <?php
                $clientes=listarClientes($conexao);
                foreach($clientes as $cliente):
            ?>
            <tr>
                <td><?php echo $cliente['cod_cliente'] ?></td>
                <td><?php echo $cliente['nome'] ?></td>
                <td><?php echo $cliente['marca'] ?></td>
                <td><?php echo $cliente['cor'] ?></td>
                <td><?php echo $cliente['ano'] ?></td>
                <td><?php echo $cliente['quilometragem'] ?></td>
                <td><?php echo $cliente['preco'] ?></td>

                <td>
                    <a href="pag_excluir_cliente.php?cod_cliente=
                    <?php echo $cliente['cod_cliente'] ?>">Excluir</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>

        </table>
        </div>
    </center>
</body>
</html>