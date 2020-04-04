<?php require_once 'global.php'; ?>

<?php
    try{
        $id = $_POST['id'];
        $name = $_POST['name'];

        $category = new Category($id);
        $category->name = $name;
        $category->update();
    
        header('Location: categories.php');
    } catch(Exception $error) {
        ErrorMessage::handleError($error);
    }
