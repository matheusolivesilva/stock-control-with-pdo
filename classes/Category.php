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

    public function load()
    {
        $query = "SELECT id, name FROM categories WHERE id = " . $this->id;
	$connection = Connection::getConnection();
	$result = $connection->query($query);
	$list = $result->fetchAll();
	foreach ($list as $row) {
            return $row;
	}
    }
  
    public function insert()
    {
        $query = "INSERT INTO categories (name) VALUES('". $this->name . "')";
	$connection = Connection::getConnection();
	$connection->exec($query);
    }


    public function update()
    {
        $query = "UPDATE categories SET name = '" . $this->nome . "' WHERE id = " . $this->id;
        $connection = Connection::getConnection();
	$connection->exec($query);
    }
}
