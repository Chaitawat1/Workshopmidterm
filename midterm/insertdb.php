<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "movie";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$conn->set_charset("utf8"); //ภาษา
// เอาค่าจาก post body มาเก็บๆ ใส่ตัวแปร ตามชื่อ
$namemovie = $_POST['namemovie'];
$dtime = $_POST['dtime'];
$username = $_POST['username'];
$password = $_POST['password'];
// คำสั่งเควรี่เพิ่มแถว
$sql = "INSERT INTO class (id, namemovie, dtime, username,password)
VALUES('', '$namemovie', '$dtime','$username', '$password')";
if($conn->query($sql)==TRUE){
    echo "<script>";
    echo "alert('Insert Successfully');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
}else{
    echo "ERROR: " . $sql ."<br>" .$conn->error;
}
$conn->close();
?>
</body>
</html>