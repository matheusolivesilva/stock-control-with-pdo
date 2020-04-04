<?php

require_once 'classes/config.php';

spl_autoload_register('loadClass');

function loadClass($className)
{
    if(file_exists('classes/' . $className . '.php')) {
        require_once 'classes/' . $className . '.php';
    }
}
