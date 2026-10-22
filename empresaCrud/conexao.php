<?php 
    $servidor ="localhost";
    $usuario = "root";
    $senha ="";
    $bd = "empresa";
    $result =mysqli_connect($servidor,$usuario,$senha,$bd);
    if($result){
        echo "Conexão realizada com sucesso.";
    }else{
        echo mysqli_connect_error($result);
    }
?>