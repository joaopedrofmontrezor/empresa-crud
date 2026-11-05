<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("../menu.php");
    ?>
    <div class="container">
        <h1>Cadastro de Funcionários</h1>
        <form action="inserir.php" method="POST">
            <p>
                <label>Nome:</label>
                <input type="text" name="nome" required>
            </p>

            <p>
                <label>Email:</label>
                <input type="email" name="email" required>
            </p>

            <p>
                <label>Cargo:</label>
                <input type="text" name="cargo" required>
            </p>

            <p>
                <label>Salário:</label>
                <input type="number" name="salario" step ="0.01" required>
            </p>

            
            <p>
                <label>Data de Admissão:</label>
                <input type="date" name="admissao"required>
            </p>

            <p>
                <input type = "submit" value = "Cadastrar">
                <input type = "reset" value = "Limpar">
            </p>
        </form>
    </div>
</body>

</html>