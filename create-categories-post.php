<?php

    require_once 'classes/Category.php';

    $category = new Category();
    $name = $_POST['name'];
    $category->name = $name;
    $category->insert();

    header('Location: categories.php');
