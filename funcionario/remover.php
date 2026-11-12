<?php
    $id = $_GET['id'];

    $sql = "delete from funcionario WHERE id = $id";

    include_once("../conexao.php");

    $result = mysqli_query($conexao,$sql);

    if($result){
        header("location:listar.php");
    }else{
        $mysqli_error($conexao);
    }


?>