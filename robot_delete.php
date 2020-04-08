<?php

require_once 'global.php';

$default_price = 50;
$default_quantity = 20;

$query = "DELETE FROM products WHERE price <= :price AND quantity <= :quantity";
$connection = Connection::getConnection();
$stmt = $connection->prepare($query);
$stmt->bindValue(':price', $default_price);
$stmt->bindValue(':quantity', $default_quantity);
$stmt->execute();

echo $stmt->rowCount() . ' items successfully deleted!';
