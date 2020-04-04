<?php require_once 'global.php'; ?>
<?php
    try {
        $category = new Category();
        $name = $_POST['name'];
        $category->name = $name;
        $category->insert();

        header('Location: categories.php');
    } catch(Exception $error) {
        ErrorMessage::handleError($error);
    }
