<?php
// sql to create table
$sql = "CREATE TABLE quansole.Users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  upassword VARCHAR(30) NOT NULL,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  echo "Connected successfully to the QuanSole Database";
  if ($conn->query($sql) === TRUE) {
      echo "Table Users created successfully";
      $sql = "INSERT INTO MyGuests (username, upassword, firstname, lastname, email)
              VALUES ('John', 'Doe12345','John', 'Doe', 'john@example.com')";
    } else {
      echo "Error creating table: " . $conn->error;
    }

$conn->close();
?>