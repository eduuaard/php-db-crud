<?php

require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_array($result);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $services = $_POST['services'];

    $sql = "UPDATE users SET nome = '$nome', email = '$email', services = '$services' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: read.php");
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($conn);
    }
}
