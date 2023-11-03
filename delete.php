<?php
require_once 'php/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: read.php");
    } else {
        echo "Erro ao excluir o usuário: " . mysqli_error($conn);
    }
}
?>