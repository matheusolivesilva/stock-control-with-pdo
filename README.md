# System Control With PDO

This project was created during a course at [Alura](https://alura.com.br) as a part of PHP formation. Here you can see a system responsible to manage products and its categories, its amounts, prices and much more.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

To run this system in your local machine, you must to have installed:

* PHP 7 or greater
* MySQL 5.7 or 5.6
* Remember to enable two extensions in your php.ini: ````extension=mysqli```` and ````extension=php\_pdo\_mysql.dll```` (for Windows) or ````extension=php\_pdo\_mysql.so```` (for Linux)

### Installing

Installing this system it's pretty easy, just follow the step by step bellow:

1. First of all, clone or download this repo
2. Go to the system's directory, open the file 'classes/config.php' and replace the values with yours credentials
3. Run the database script 'database,sql' in your MySQL
4. Run the system with ````bash php -S localhost:yourporthere/ ```` 
5. Enjoy ;)

## Running Tests

I've created some simple tests, just to ensure that this project is running correctly, to use them, just run the files 'robot\_edit.php' and the 'robot\_delete.php' in your local server.

## Built With

This simple system was written with the techniques and tecnologies below:

* PHP 7
* MySQL database
* Some concepts of gitflow
* VIM as editor

## Author

* **Matheus Oliveira** - [Github](https://github.com/MatheusOliveiraSilva/) | [Linkedin](https://www.linkedin.com/in/matheusoliveirasilva/)
