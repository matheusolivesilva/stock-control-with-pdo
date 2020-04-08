<?php

    require_once 'global.php';
    try {
        $id = $_GET['id'];
	$product = new Product($id);
	$product->delete();

	header('Location: products.php');
    } catch(Exception $error) {
        ErrorMessage::handleError($error);
    }

