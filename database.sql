CREATE DATABASE stock;

USE stock;

CREATE TABLE categories
(
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE products
(
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(150) NOT NULL,
  price DOUBLE(9,2) NOT NULL,
  quantity INT NOT NULL,
  category_id INT NOT NULL,
  PRIMARY KEY(id)
);


ALTER TABLE products ADD CONSTRAINT fk_categories FOREIGN KEY (category_id) REFERENCES categories(id);


INSERT INTO categories (name) VALUES
('Books'),
('Games'),
('Movies'),
('Magazines');

INSERT INTO products (name, price, quantity, category_id) VALUES
('The Lord of Rings, Complete Trilogy', 119.50, 10, 3),
('Batman Arkahan City', 65.99, 7, 2),
('Gamer Nº 1', 29.90, 5, 1),
('A Song of Ice and Fire - 5 Books', 199.99, 2, 1),
('The Godfather', 89.90, 1, 3);
