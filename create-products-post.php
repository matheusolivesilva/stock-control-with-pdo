<?php
    require_once 'global.php';

    try {
        $name = $_POST['name'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$category_id = $_POST['category_id'];

	$product = new Product();

	$product->name = $name;
	$product->quantity = $quantity;
	$product->price = $price;
	$product->category = $category_id;
	$product->insert();

	header('Location: products.php');
    } catch (Exception $error) {
        ErrorMessage::handleError($error);
    }
