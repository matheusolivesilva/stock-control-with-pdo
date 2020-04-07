<?php
class Category
{
   

    public $id;
    public $name;

    public function __construct($id = false)
    {
        if ($id) {
	    $this->id = $id;
	    $this->load();
        }
    }

    public static function toList()
    {
	$query = "SELECT id, name FROM categories ORDER BY name";
	$connection = Connection::getConnection();
	$result = $connection->query($query);
	$list = $result->fetchAll();

	return $list;
    }

    public function load()
    {
        $query = "SELECT id, name FROM categories WHERE id = :id";
	$connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(':id', $this->id);
	$stmt->execute();
	$list = $stmt->fetch();
        $this->name = $list['name'];

    }
  
    public function insert()
    {
        $query = "INSERT INTO categories (name) VALUES (:name)";
	$connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(":name", $this->name);
	$stmt->execute();
    }


    public function update()
    {
        $query = "UPDATE categories SET name = :name WHERE id = :id";
        $connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(':name', $this->name);
	$stmt->bindValue(':id', $this->id);
	$stmt->execute();
    }

    public function delete()
    {
        $query = "DELETE FROM categories WHERE id = :id";
	$connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(':id',$this->id);
	$stmt->execute();
    }
}
