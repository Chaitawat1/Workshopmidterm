<?php
$servername = "localhost";
$username= "webadmin";
$password = "1234";
$dbname = "movie";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
//sql to create table
$sql = "CREATE TABLE class(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    idmovie VARCHAR(30) NOT NULL,
    namemovie VARCHAR(30) NOT NULL,
    dtime VARCHAR(30),
    username VARCHAR(30) NOT NULL,
    password INT(4)NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if ($conn->query($sql)===TRUE){
    echo "Table MyGuests created successfully";
}else{
    echo "Error creating table :".$conn->error; 
}
$conn->close();
?>