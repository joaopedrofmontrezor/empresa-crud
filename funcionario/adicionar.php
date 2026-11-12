<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once("../menu.php");

    ?>
    <div class="container">
        <h1> Cadastro de Funcionario </h1>
    <form action="inserir.php" method="post">
        <p>
        <label for ="nome"> nome: </label>
        <input type="texte" name="nome" required>
        </p>
          <p>
        <label for = "email"> email: </label>
        <input type="email" name="email" required>
        </p>
          <p>
        <label for = "cargo" > cargo: </label>
        <input type="text" name="cargo" required>
        </p>
          <p>
        <label for = "salario" > salario: </label>
        <input type="text" name="salario" required>
        </p>
          <p>
        <label for ="data"> Data de Admissao </label>
        <input type="date" name="admissao" required>
        </p>
          <p>
        <input type="submit" value="Cadastrar" >
        <input type="reset"  value="Limpar" >
        </p>
</body>
</html>