<?php
require_once 'global.php';
createCategory();
echo '<br>';
createProducts();
function createCategory() {
    $category_name = "Clothes";

    $query = "INSERT INTO categories (name) VALUES (:name)";
    $connection = Connection::getConnection();
    $stmt = $connection->prepare($query);
    $stmt->bindValue(':name', $category_name);
    $stmt->execute();
    echo 'Category <b>'. $category_name . "</b> Registered Successfully";
}

function createProducts() 
{
    $number_of_clothes = 10;
    $category_id = 5;
    $type_clothe = ['Shirt', 'Jacket', 'T-shirt', 'Shorts', 'Pants', 'Jacket'];
    $gender_clothe = ['Male', 'Female'];
    $color_clothe = ['Black', 'Red', 'Blue', 'Yellow', 'Green', 'White', 'Brown', 'Pink'];
    
    for($x = 1; $x <= $number_of_clothes; $x++) {
        $type_index = rand(0,5);
        $gender_index = rand(0, 1);
        $color_index = rand(0, 7);
        $price = rand(1, 100);
        $quantity = rand(1, 50);
        $clothe = $type_clothe[$type_index] . ' ' . $gender_clothe[$gender_index] . ' ' . $color_clothe[$color_index];
        $query = "INSERT INTO products (name, price, quantity, category_id)
                                        VALUES (:name, :price, :quantity, :category_id)";
        $connection = Connection::getConnection();
        $stmt = $connection->prepare($query);
        $stmt->bindValue(':name', $clothe);
        $stmt->bindValue(':price',$price);
        $stmt->bindValue(':quantity', $quantity);
        $stmt->bindValue(':category_id', $category_id);
        $stmt->execute();
        echo 'Product <b>' . $clothe . '</b> Registered successfully!<br>';
    
    }
}
