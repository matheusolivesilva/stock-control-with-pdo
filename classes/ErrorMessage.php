
<?php

class ErrorMessage
{
    public static function handleError(Exception $error)
    {
        if (DEBUG) {
            echo '<pre>';
            print_r($error);
            echo '</pre>';
        } else {
            echo $e->getMessage();
        }
        exit;
    }
}
