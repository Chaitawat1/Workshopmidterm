<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "movie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
$id = isset($_GET['id']) ? $_GET['id']: '';
if($id!=''){
    $sql ="DELETE FROM class Where id='".$id."' ";
    if($conn->query($sql) == TRUE){
            echo "<script>";
            echo "alert('Deleted Successfully');";
            echo "window.location = 'index.php'; ";
            echo "</script>";
    }else{
        echo "ERROR: " .$sql ."<br>" .$conn->error;
    }
}