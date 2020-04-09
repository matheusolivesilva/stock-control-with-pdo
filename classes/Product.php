<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $category;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
	    $this->load();
	}
    }

    public function load()
    {
        $query = "SELECT name, price, quantity, category_id FROM products WHERE id = :id";
	$connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(':id', $this->id);
	$stmt->execute();
	$row = $stmt->fetch();
	$this->name = $row['name'];
	$this->price = $row['price'];
	$this->quantity = $row['quantity'];
	$this->category = $row['category_id'];
    }
    public static function toList()
    {
        $query = "SELECT p.id, p.name, price, quantity, category_id, c.name as category_name
                                FROM products p
				INNER JOIN categories c
                    ON p.category_id = c.id
		                          ORDER BY p.name";
	$connection = Connection::getConnection();
	$result = $connection->query($query);
	$list = $result->fetchAll();
	return $list;
    }

    public function insert()
    {
        $query = "INSERT INTO products (name, price, quantity, category_id) 
   VALUES (:name, :price, :quantity, :category_id)";
        $connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(':name', $this->name);
	$stmt->bindValue(':price', $this->price);
	$stmt->bindValue(':quantity', $this->quantity);
	$stmt->bindValue(':category_id', $this->category);
	$stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE products SET name = :name, price = :price, quantity = :quantity, category_id = :category_id WHERE id = :id";
	$connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(':name', $this->name);
	$stmt->bindValue(':price', $this->price);
	$stmt->bindValue(':quantity', $this->quantity);
	$stmt->bindValue(':category_id', $this->category);
	$stmt->bindValue(':id', $this->id);
	$stmt->execute();
    }   
    
    public function delete()
    {
        $query = "DELETE FROM products WHERE id = :id";
	$connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(':id', $this->id);
	$stmt->execute();
    }

    public static function listByCategory($category_id) 
    {
        $query = "SELECT id, name, price, quantity FROM products WHERE category_id = :category_id";
	$connection = Connection::getConnection();
	$stmt = $connection->prepare($query);
	$stmt->bindValue(':category_id', $category_id);
	$stmt->execute();
	return $stmt->fetchAll();
    }
}
