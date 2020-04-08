<?php

require_once 'global.php';

$list_of_products = Product::toList();

$query = "UPDATE products SET price = :price, quantity = :quantity WHERE id = :id";

$connection = Connection::getConnection();

foreach($list_of_products as $product) {
    $stmt = $connection->prepare($query);

    $new_price = rand(0, 100);
    $new_quantity = rand(0, 50);

    $stmt->bindValue(':price', $new_quantity);
    $stmt->bindValue(':quantity', $new_quantity);
    $stmt->bindValue(':id', $product['id']);
    $stmt->execute();

    echo $product['name'] . ' The price was changed from: ' . $product['price'] . ' to: ' . $new_price . ' The quantity was changed from ' . $product['quantity'] . ' to: ' . $new_quantity . '<br>';
}


