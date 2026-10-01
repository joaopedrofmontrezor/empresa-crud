<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Resultado da Tabuada</h2>

    <?php

    if (isset($_POST['numero'])) {
        $numero = (int)($_POST['numero']);

        echo "<h3>Tabuada do número: $numero</h3>";
        echo "<ul>";


        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = <strong>$resultado</strong></li>";
        }

        echo "</ul>";
    } else {
        echo "<p>Nenhum número foi informado.</p>";
    }
    ?>

    <br>
    <a href="index.html">
        <button type="button">Voltar</button>
    </a>
</body>

</html>