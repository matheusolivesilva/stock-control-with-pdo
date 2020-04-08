<?php
    require_once 'global.php';

    try {
        $id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$category_id = $_POST['category_id'];

	$product = new Product($id);

	$product->name = $name;
	$product->price = $price;
	$product->quantity = $quantity;
	$product->category = $category_id;

	$product->update();

	header('Location: products.php');
    } catch(Exception $error) {
        ErrorMessage::handleError($error);
    }
