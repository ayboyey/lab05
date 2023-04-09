<?php
$server = "localhost";
$username = "127.0.0.1";
$password = "";
$database = "database_name";

$conn = mysqli_connect($server, $username, $password, $database);

$sql = "CREATE TABLE articles (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    category VARCHAR(30) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    mysqli_query($conn, $sql);
    
$name = "Article 1";
$category = "Category 1";
$price = 10.99;
$description = "This is a description of article 1.";
    
$sql = "INSERT INTO articles (name, category, price, description)
VALUES ('$name', '$category', '$price', '$description')";
    
mysqli_query($conn, $sql);
mysqli_close($conn);

    
?>

