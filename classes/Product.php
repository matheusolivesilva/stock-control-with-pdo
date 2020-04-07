<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $category;

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
}
