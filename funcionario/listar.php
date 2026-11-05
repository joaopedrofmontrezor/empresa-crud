<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Funcionários</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <?php
    include_once("../menu.php");
    ?>

    <div class="container my-5">
        <h1 class="mb-4">Listagem de Funcionários</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Cargo</th>
                            <th>Salário</th>
                            <th class="text-center">Operação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../conexao.php");
                        $sql = "select * from funcionario";
                        $result = mysqli_query($conexao, $sql);

                        while ($linha = mysqli_fetch_assoc($result)) {  ?>
                            <tr>
                                <td><?php echo $linha['nome']; ?></td>
                                <td><?php echo $linha['cargo']; ?></td>
                                <td>R$ <?php echo number_format($linha['salario'], 2, ',', '.'); ?></td>
                                <td class="text-center">
                                    <a href="editar.php?id=<?php echo $linha['id'] ?? ''; ?>" class="btn btn-sm btn-warning">Editar</a>
                                    <button class="btn btn-sm btn-danger">Remover</button>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>