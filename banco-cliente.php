<?php
    //função inserir
    function inserir($conexao, $nome, $marca, $cor, $ano, $quilometragem, $preco){
        $sql="insert into cliente values (default, '$nome', '$marca', '$cor', '$ano', '$quilometragem', $preco)";
        return mysqli_query($conexao, $sql);
    }
    //função alterar
    function alterar($conexao,$nome,$marca,$cor,$ano,$quilometragem,$preco){
        $sql="update cliente set
        nome='$nome',
        marca='$marca',
        cor='$cor',
        ano='$ano',
        quilometragem='$quilometragem',
        preco=$preco where cod_cliente=$cod_cliente";
    return mysqli_query($conexao, $sql);
    }
    //função excluir
    function excluir($conexao, $cod_cliente){
        $sql="delete from cliente where cod_cliente= $cod_cliente";
        return mysqli_query($conexao, $sql);
    }
    //função listar clientes
    function listarClientes($conexao){
        $clientes = array();
        $resultado = mysqli_query($conexao, "select * from cliente");
        while ($cliente = mysqli_fetch_assoc($resultado)) {
            array_push ($clientes, $cliente);
        }
        return $clientes;
    }
    //função buscar clientes
    function busca($conexao, $cod_cliente){
        $resultado = mysqli_query($conexao, "select * from where cod_cliente=$cod_cliente");
        return mysqli_fetch_assoc($resultado);
    }
?>