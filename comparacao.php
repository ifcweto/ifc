<?php
// Inicializa variáveis
$resultado = '';
$valor1 = '';
$valor2 = '';

// Processa o formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = floatval($_POST['valor1']);
    $valor2 = floatval($_POST['valor2']);

    // Operações de comparação
    $resultado = [
        'igual' => $valor1 == $valor2,
        'identico' => $valor1 === $valor2,
        'diferente' => $valor1 != $valor2,
        'nao_identico' => $valor1 !== $valor2,
        'maior' => $valor1 > $valor2,
        'menor' => $valor1 < $valor2,
        'maior_ou_igual' => $valor1 >= $valor2,
        'menor_ou_igual' => $valor1 <= $valor2,
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Operadores de Comparação</h2>

    <form method="post" action="" class="mt-4">
        <div class="form-group">
            <label for="valor1">Valor 1:</label>
            <input type="number" class="form-control" id="valor1" name="valor1" step="0.01" value="<?= htmlspecialchars($valor1) ?>" required>
        </div>
        <div class="form-group">
            <label for="valor2">Valor 2:</label>
            <input type="number" class="form-control" id="valor2" name="valor2" step="0.01" value="<?= htmlspecialchars($valor2) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Comparar</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="mt-4">
        <h4>Resultados das Comparações:</h4>
        <ul class="list-group">
            <li class="list-group-item">Valor 1 é igual a Valor 2: <?= $resultado['igual'] ? 'Sim' : 'Não' ?></li>
            <li class="list-group-item">Valor 1 é idêntico a Valor 2: <?= $resultado['identico'] ? 'Sim' : 'Não' ?></li>
            <li class="list-group-item">Valor 1 é diferente de Valor 2: <?= $resultado['diferente'] ? 'Sim' : 'Não' ?></li>
            <li class="list-group-item">Valor 1 não é idêntico a Valor 2: <?= $resultado['nao_identico'] ? 'Sim' : 'Não' ?></li>
            <li class="list-group-item">Valor 1 é maior que Valor 2: <?= $resultado['maior'] ? 'Sim' : 'Não' ?></li>
            <li class="list-group-item">Valor 1 é menor que Valor 2: <?= $resultado['menor'] ? 'Sim' : 'Não' ?></li>
            <li class="list-group-item">Valor 1 é maior ou igual a Valor 2: <?= $resultado['maior_ou_igual'] ? 'Sim' : 'Não' ?></li>
            <li class="list-group-item">Valor 1 é menor ou igual a Valor 2: <?= $resultado['menor_ou_igual'] ? 'Sim' : 'Não' ?></li>
        </ul>
    </div>
    <?php endif; ?>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
