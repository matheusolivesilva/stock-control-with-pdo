<?php
require_once 'classes/Connection.php';
class Category
{
   

    public $id;
    public $name;

    public function toList()
    {
        $query = "SELECT id, name FROM categories";
	$connection = Connection::getConnection();
	$result = $connection->query($query);
	$list = $result->fetchAll();

	return $list;
    }

    public function insert()
    {
        $query = "INSERT INTO categories (name) VALUES('". $this->name . "')";
	$connection = Connection::getConnection();
	$connection->exec($query);
    }


       
}
