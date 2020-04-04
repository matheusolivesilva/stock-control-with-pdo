<?php require_once 'global.php' ?>

<?php
    try {
        $id = $_GET['id'];
        $category = new Category($id);
        $category->delete();
        header('Location: categories.php');
    } catch(Exception $error) {
        ErrorMessage::handleError($error);
    }
