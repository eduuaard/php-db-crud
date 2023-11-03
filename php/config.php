<?php

$servername = 'localhost';
$username = 'root';
$password= '';
$dbname = 'teste_db';

$conn = new mysqli($servername, $username, $password, $dbname);

/*if ($conn->connect_error){
    echo 'Não foi possível conectar';
} else {
    echo 'Conectado com sucesso';
}*/