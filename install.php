<?php
$servername = "localhost";
$username = "root";
$password = "root";


// Create Connection
$conn=new PDO("mysql:host=$servername","$username", "$password" );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS LunchesTotoMcgoo";
$conn->exec($sql);
echo("Database created successfully<br>");
$sql = "USE LunchesTotoMcgoo";

// New Table
$conn->exec($sql);
echo("Database selected successfully<br>");

$stmt = $conn->prepare("DROP TABLE IF EXISTS TBLusers;
CREATE TABLE TBLusers
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Forename VARCHAR(30) NOT NULL,
Surname VARCHAR(30) NOT NULL,
House VARCHAR(30) NOT NULL,
Year INT(2) NOT NULL,
Balance DECIMAL(5,2) NOT NULL,
Password VARCHAR(200) NOT NULL,
Role TINYINT(1) NOT NULL,
Username VARCHAR(30) NOT NULL);
");
$stmt->execute();
echo("Table TBLusers created successfully<br>");

// New Table
$stmt = $conn->prepare("DROP TABLE IF EXISTS TBLFood;
CREATE TABLE TBLFood
(FoodID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FoodName VARCHAR(30) NOT NULL,
Price DECIMAL(4,2) NOT NULL,
StockLevel INT(5),
Category VARCHAR(30) NOT NULL);
");
$stmt->execute();
echo("Table TBLFood created successfully<br>");

// New Table
$stmt = $conn->prepare("DROP TABLE IF EXISTS TBLContents;
CREATE TABLE TBLContents
(OrderID INT(4) NOT NULL,
FoodID INT(4) NOT NULL,
Quantity INT(4) DEFAULT 1,
PRIMARY KEY (OrderID, FoodID));
");
$stmt->execute();
echo("TABLE TBLContents created successfully<br>");

// New Table
$stmt = $conn->prepare("DROP TABLE IF EXISTS TBLOrder;
CREATE TABLE TBLOrder
(UserID INT(4) NOT NULL,
OrderDate DATETIME,
OrderID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY);
");
$stmt->execute();
echo("Table TBLOrder created successfully<br>");

?>