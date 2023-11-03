<?php

require_once 'config.php';

$create = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $services = $_POST["services"];

    // Inserir dados na tabela 'users'
    $sql = "INSERT INTO users (nome, email, services) VALUES ('$nome', '$email', '$services')";
    if (mysqli_query($conn, $sql)) {
        // Obter o ID do usuário recém-inserido
        $userId = mysqli_insert_id($conn);

        // Inserir apenas o valor de '$services' na tabela 'setores'
        $sqlSetores = "INSERT INTO setores (services) VALUES ('$services')";
        if (mysqli_query($conn, $sqlSetores)) {
            // Obter o ID do setor recém-inserido
            $setorId = mysqli_insert_id($conn);

            // Inserir os IDs do usuário e do setor na tabela 'users_setores'
            $sqlUsersSetores = "INSERT INTO users_setores (user_id, setor_id) VALUES ($userId, $setorId)";
            if (mysqli_query($conn, $sqlUsersSetores)) {
                $create = "USUÁRIO CRIADO COM SUCESSO";
            } else {
                echo "Erro ao inserir na tabela 'users_setores': " . mysqli_error($conn);
            }
        } else {
            echo "Erro ao inserir 'services' na tabela 'setores': " . mysqli_error($conn);
        }
    } else {
        echo "Erro ao inserir na tabela 'users': " . mysqli_error($conn);
    }
}
