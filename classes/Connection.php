<?php

class Connection
{
    public static function getConnection()
    {
        $connection = new PDO('mysql:host=127.0.0.1;dbname=stock', 'root', 'root');
	return $connection;
    }
}
