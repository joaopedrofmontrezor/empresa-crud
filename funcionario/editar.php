<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Funcionários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <?php
    include_once("../menu.php");


    require_once("../conexao.php");

    $id = $_GET['id'] ?? 0;


    $sql = "SELECT * FROM funcionario WHERE id = $id";
    $result = mysqli_query($conexao, $sql);

    $funcionario = mysqli_fetch_assoc($result);
    ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="h3 mb-4 text-center">Edição de Funcionários</h1>

                        <form action="atualizar.php" method="POST">

                            <input type="hidden" name="id" value="<?php echo $funcionario['id'] ?? $id; ?>">

                            <div class="mb-3">
                                <label class="form-label">Nome:</label>
                                <input type="text" name="name" class="form-control" required value="<?php echo $funcionario['nome'] ?? ''; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" required value="<?php echo trim($funcionario['email'] ?? ''); ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cargo:</label>
                                <input type="text" name="cargo" class="form-control" required value="<?php echo trim($funcionario['cargo'] ?? ''); ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Salário:</label>
                                <input type="number" name="salario" step="0.01" class="form-control" required value="<?php echo $funcionario['salario'] ?? ''; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Data de Admissão:</label>
                                <input type="date" name="admissao" class="form-control" required value="<?php echo $funcionario['admissao'] ?? ''; ?>">
                            </div>


                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="ativo" name="ativo" value="1" <?php if (isset($funcionario['ativo']) && $funcionario['ativo'] == 1) {
                                                                                                                        echo 'checked';
                                                                                                                    } ?>>
                                <label class="form-check-label" for="ativo">Ativo</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>