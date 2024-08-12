<?php
session_start();

// Inicializa o saldo se não estiver definido
if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 100.00; // Saldo inicial para visualização
}

// Processa o formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['acao']) && $_POST['acao'] == 'zerar') {
        $_SESSION['saldo'] = 100.00; // Reseta o saldo para o valor inicial
    } else {
        $operacao = $_POST['operacao'];
        $valor = floatval($_POST['valor']);

        // Atualiza o saldo com base na operação
        if ($operacao == 'adicao') {
            $_SESSION['saldo'] += $valor; // Adiciona o valor ao saldo
        } elseif ($operacao == 'subtracao') {
            $_SESSION['saldo'] -= $valor; // Subtrai o valor do saldo
        } elseif ($operacao == 'multiplicacao') {
            $_SESSION['saldo'] *= $valor; // Multiplica o saldo pelo valor
        } elseif ($operacao == 'divisao') {
            if ($valor != 0) {
                $_SESSION['saldo'] /= $valor; // Divide o saldo pelo valor
            } else {
                echo '<div class="alert alert-danger mt-4">Não é possível dividir por zero!</div>';
            }
        } elseif ($operacao == 'modulo') {
            $_SESSION['saldo'] %= $valor; // Aplica o módulo do saldo com o valor
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Saldo Bancário</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Calculadora de Saldo Bancário</h2>

    <div class="alert alert-info mt-4">
        Saldo atual: R$ <?= number_format($_SESSION['saldo'], 2, ',', '.') ?>
    </div>

    <form method="post" action="" class="mt-4">
        <div class="form-group">
            <label for="operacao">Operação:</label>
            <select class="form-control" id="operacao" name="operacao" required>
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
                <option value="modulo">Módulo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" class="form-control" id="valor" name="valor" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Executar Operação</button>
    </form>

    <form method="post" action="" class="mt-4">
        <input type="hidden" name="acao" value="zerar">
        <button type="submit" class="btn btn-danger">Zerar Conta</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
