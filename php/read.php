<?php

require_once 'config.php';
require_once 'delete.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
