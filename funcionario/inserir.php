<?php

$nome = "João";
$email = "jp.montrezor@gmail.com";
$cargo = "DBA";
$salario = 1000;
$admissao = "2026-11-05";

$sql = "insert into funcionario (nome, email, cargo, salario,data_admissao)
values ('$nome', '$email', '$cargo', $salario, '$admissao')";

require_once("../conexao.php");
$resposta = mysqli_query($conexao,$sql);

if ($resposta == true){
    header("location: listar.php");
}
?>