<?php

$pdo = require 'connect.php';

$id = 2;

$sql = 'DELETE from COMPANY where ID =:id';

$statement = $pdo->prepare($sql);


$statement->bindParam(':id', $id, PDO::PARAM_INT);

if ($statement->execute()) {
    echo 'successfully!';
}

$pdo = null;