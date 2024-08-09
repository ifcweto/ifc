<?php
// Inicializa a sessão para armazenar o contador
session_start();

// Inicializa o contador na sessão se não estiver definido
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Verifica se o botão de incremento ou decremento foi clicado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['incrementar'])) {
        $_SESSION['contador']++; // Incrementa o contador
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador com Incremento/Decremento</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Gerenciador de Contador</h2>

    <div class="text-center mt-4">
        <h3>Contador: <?= $_SESSION['contador'] ?></h3>
    </div>

    <form method="post" action="" class="text-center mt-4">
        <button type="submit" name="incrementar" class="btn btn-success">Incrementar</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
