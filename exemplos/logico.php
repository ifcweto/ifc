<?php
// Inicializa variáveis
$mensagem = '';
$senha = '';

// Função para verificar se a senha é forte
function verificar_senha($senha) {
    // Define critérios de senha forte
    $criterios = [
        'comprimento' => strlen($senha) >= 8,
        'maiuscula' => preg_match('/[A-Z]/', $senha),
        'minuscula' => preg_match('/[a-z]/', $senha),
        'numero' => preg_match('/\d/', $senha),
        'especial' => preg_match('/[\W_]/', $senha),
    ];

    // Verifica se todos os critérios são atendidos
    foreach ($criterios as $criterio) {
        if (!$criterio) {
            return false;
        }
    }
    return true;
}

// Processa o formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST['senha'];

    // Verifica a senha e define a mensagem
    $mensagem = verificar_senha($senha) ? "A senha é forte." : "A senha não é forte o suficiente.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Senha</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Verificação de Senha</h2>

    <form method="post" action="" class="mt-4">
        <div class="form-group">
            <label for="senha">Digite a Senha:</label>
            <input type="text" class="form-control" id="senha" name="senha" value="<?= htmlspecialchars($senha) ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Verificar Senha</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="mt-4">
        <h4>Resultado da Verificação:</h4>
        <div class="alert alert-info">
            <?= htmlspecialchars($mensagem) ?>
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
