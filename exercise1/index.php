<?php

$pdo = require 'connect.php';

$values = [
    'id' => 1,
    'salary' => 25000.00
];


$sql = 'UPDATE COMPANY
        SET SALARY = :salary
        WHERE ID = :id';

$statement = $pdo->prepare($sql);


$statement->bindParam(':id', $values['id'], PDO::PARAM_INT);
$statement->bindParam(':salary', $values['salary']);

if ($statement->execute()) {
    echo 'successfully!';
}

$pdo = null;