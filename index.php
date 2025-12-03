<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minha Primeira Página PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .data-hora {
            color: blue;
            font-weight: bold;
        }
    </style>
<?php

// A senha enviada pelo usuário ao tentar logar.
$senha_digitada = "minhaSenhaSecreta123";

// O hash previamente armazenado no banco de dados.
$hash_do_banco = '$2y$10$tJ9f9N/eZ4W7sO2J1M.0tO2W1eC7cI2aE9tE5U7mG9kM2nL7oO6kG6'; // (Exemplo do hash salvo)

// 1. Usar password_verify() para comparar a senha digitada com o hash.
//    Esta função automaticamente extrai o salt do hash e aplica o algoritmo correto.
if (password_verify($senha_digitada, $hash_do_banco)) {
    echo "Login bem-sucedido! O hash corresponde à senha.";
    // Redirecionar para a área logada.
} else {
    echo "Falha no login! Senha ou usuário incorretos.";
    // Mostrar mensagem de erro.
}

?>
</head>
<body>

    <h1>👋 Bem-vindo ao Mundo do PHP!</h1>

    <p>Este texto é **HTML** puro.</p>

    <?php
        // 1. O PHP pode ser usado para definir variáveis
        $nome = "Visitante";
        $data_atual = date("d/m/Y H:i:s");

        // 2. O PHP pode ser usado para executar lógica (como verificar se um usuário está logado)
        if (isset($_GET['usuario'])) {
            $nome = htmlspecialchars($_GET['usuario']); // Usando htmlspecialchars para segurança!
        }
    ?>
    <h2>Olá, <?php echo $nome; ?>!</h2>
    
    <p>
        A data e hora atuais, geradas pelo servidor em PHP, são:
        <span class="data-hora"><?php echo $data_atual; ?></span>
    </p>

    <p>O ano atual é: **<?= date("Y"); ?>**</p>

</body>
</html>