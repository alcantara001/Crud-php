<?php
    include ("conexao.php");
    include ("banco-cliente.php");

    $nome=$_POST['txtnome'];
    $marca=$_POST['txtmarca'];
    $cor=$_POST['txtcor'];
    $ano=$_POST['txtano'];
    $quilometragem=$_POST['txtquilometragem'];
    $preco=$_POST['txtpreco'];

    if(inserir($conexao, $nome, $marca, $cor, $ano,$quilometragem, $preco)){
        echo ("Cliente inserido com sucesso");
    }else{
        $msg=mysqli_error($conexao);
        echo ($msg);
    }
?>