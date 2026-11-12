<?php 
    $servidor ="localhost";
    $usuario = "root";
    $senha ="";
    $bd = "empresa";
    $conexao =mysqli_connect($servidor,$usuario,$senha,$bd);
    if($conexao){
        //echo "Conexão realizada com sucesso.";
    }else{
        echo mysqli_connect_error($conexao);
    }
?>