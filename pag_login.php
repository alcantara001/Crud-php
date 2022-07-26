<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div id="container">
        <center>
            <h1>Tela de Login</h1>
            <form action="" method="POST">
                Usuário: <input type="text" name="txtu" id="" 
                placeholder="Digite o login"><br><br>

                Senha: <input type="password" name="txts" id="" 
                placeholder="Digite a senha"><br><br>
                <input id="sbmt" type="submit" value="Logar"><br><br>
            </form>
            <?php
            include ("conexao.php");
            include ("banco-usuario.php");
            ?>
        </center>
    </div>

</body>
</html>