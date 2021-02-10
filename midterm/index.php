<!DOCTYPE html>
<html>
<body>
<style>
table, tr, td {
  border: 1px solid black;
  border-collapse: collapse;
}
#th {  
  background-color: blue;
  color: white;
}
.button1 {
  background-color: yellow;
  border: none;
  color: white;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {
  background-color: red;
  border: none;
  color: white;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {
  background-color: blue;
  border: none;
  color: white;
  padding: 15px 32px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
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
$conn->set_charset("utf8"); //ภาษา?>
<table border="2" style="width:80%">
    <tr>
    <form method="get" id="form" enctype="multipart/form-data" action="insert_from.php">
        <button class="button4">เพิ่มข้อมูล</button>
    </form>
    <form method="get" id="form" enctype="multipart/form-data" action="logout.php">
        <button class="button3">ออกจากระบบ</button>
    </form>
    </tr>
    <div>
    <form method="get" id="form" enctype="multipart/form-data" action="">
      <input type="text" name="search" placeholder="รหัสนักศึกษา.." value="">
      <input type="submit" class="button5" value="ค้นหา">
    </form>
    </div>
    <tr id="th">
        <td>รหัสภาพยนต์</td>
        <td>ชื่อภาพยนต์</td>
        <td>เวลาที่ฉาย</td>
        <td>ชื่อผู้ใช้</td>
        <td>รหัสผ่าน</td>
        <td>แก้ไข</td>
        <td>ลบ</td>
    </tr>
<?php
$search=isset($_GET['search']) ? $_GET['search']:'';
$sql="SELECT * FROM class WHERE id LIKE '%$search%'";
$result = $conn->query($sql);

if($result->num_rows>0){ //มากกว่า0row
    while($row=$result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row["id"]; // เอาค่าจากฟิวด์ ชื่อนั้นๆ ๆๆๆ มาแสดง ?></td>
            <td><?php echo $row["namemovie"];?></td>
            <td><?php echo $row["dtime"];?></td>
            <td><?php echo $row["username"];?></td>
            <td><?php echo $row["password"];?></td>
            <td><button class="button1"><a href="update_form.php?id_s=<?php echo $row["id"];?>>">แก้ไข</a></button></td>
            <td><button class="button2"><a href="delete.php?id_s=<?php echo $row["id"];?>>">ลบ</button></a></td>
        </tr>
<?php
    }
}else{ // ถ้าไม่มีแถวเลย แสดงผลว่าไม่มี
    echo "0 Results";
}
$conn->close(); // ปิดคอนเนคชั่น
?>
</table>
</body>
</html>