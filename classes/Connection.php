<?php

require_once 'config.php';

class Connection
{
    public static function getConnection()
    {
        $connection = new PDO(DB_DRIVE . ':host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
	return $connection;
    }
}
