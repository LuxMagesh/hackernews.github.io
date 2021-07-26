<?php
$servername = "localhost";
$username = "db_admin";
$password = "lJ1xj1NXBE0@R9l2";
$dbname = "quansole";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully to the QuanSole Database";


// $sql = "CREATE TABLE quansole.Users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL,
//     upassword VARCHAR(30) NOT NULL,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     echo "Connected successfully to the QuanSole Database";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "Table Users created successfully";
//         $sql2 = "INSERT INTO users (username, upassword, firstname, lastname, email)
//            VALUES ('John', 'Doe12345','John', 'Doe', 'john@example.com')";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }


    
//     $conn->close();

?>