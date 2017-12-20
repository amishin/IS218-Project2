<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=am988';
    $username = 'am988';
    $password = 'IvCVtGzJ';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>