<?php require_once 'classes/Category.php' ?>

<?php

    $id = $_GET['id'];
    $category = new Category($id);
    $category->delete();
    
    header('Location: categories.php');
