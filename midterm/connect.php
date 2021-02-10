<?php
$servername = "localhost"; // ตั้งค่าชื่อ server
$username = "webadmin"; // username
$password = "1234"; // password
$dbname = "movie"; // ชื่อ ฐานข้อมูล
// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);//("localhost","webadmin","1234","myDB" ); // สร้างคอนเนคชั่น
mysqli_set_charset($conn, 'utf8'); // ตั้งค่า charset
// Check connection
if ($conn->connect_error) { //เช็คว่า error ไหม
    die("Connection failed: " . $conn->connect_error);
}
?>