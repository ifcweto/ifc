<?php
// Inicializa variáveis
$resultado_concatenacao = '';
$resultado_atribuicao_concatenacao = '';
$string1 = '';
$string2 = '';

// Processa o formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];

    // Operações de string
    $resultado_concatenacao = $string1 . " " . $string2; // Concatenar
    $resultado_atribuicao_concatenacao = $string1; // Inicializa com string1
    $resultado_atribuicao_concatenacao .= " " . $string2; // Atribuição com concatenação
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de String</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Manipulação de Strings</h2>

    <form method="post" action="" class="mt-4">
        <div class="form-group">
            <label for="string1">Texto 1:</label>
            <input type="text" class="form-control" id="string1" name="string1" value="<?= htmlspecialchars($string1) ?>">
        </div>
        <div class="form-group">
            <label for="string2">Texto 2:</label>
            <input type="text" class="form-control" id="string2" name="string2" value="<?= htmlspecialchars($string2) ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submeter</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="mt-4">
        <h4>Resultados:</h4>
        <div class="alert alert-info">
            <strong>Concatenar:</strong> <?= htmlspecialchars($resultado_concatenacao) ?>
        </div>
        <div class="alert alert-info">
            <strong>Atribuição com Concatenação:</strong> <?= htmlspecialchars($resultado_atribuicao_concatenacao) ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
