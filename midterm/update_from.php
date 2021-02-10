<!DOCTYPE html>
<body>
<style>
input[type=text], input[type=date]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid orange;
    border-radius: 4px;
}
.button {
    width: 100%;
    background-color: orange;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
h2 {
    text-align: center;
    color: orange;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
$conn->set_charset("utf8"); //ภาษา
$id = isset($_GET['id']) ? $_GET['id']:''; // ดึงตัวแปร จาก get request ชื่อ id_stu ถ้ามีก็เอา ไม่มี สตริงว่าง
if($id!=''){ // ถ้ามี id_stu
    $sql = "SELECT * FROM class WHERE id='".$id."'"; //คำสั่งเควรี
    $result = $conn->query($sql); // คิวรี่
    $row = $result->fetch_assoc(); // คืนค่าแถวกลับมาเป็น record
}
?>
<h2>แก้ไขข้อภาพยนต์</h2>
<!-- นี่กรอกฟอร์ม ตอน send ก็ post request ไปที่ไฟล์ insert.php -->
<div>
  <form action="update_db.php" method="post" id="form">
    <label>ชื่อภาพยนต์</label>
    <input type="text" name="namemovie" placeholder="Name Movie..">

    <label>เวลาที่เริ่มฉาย</label>
    <input type="text" name="dtime">

    <input type="submit" class="button" value="<?php if($id!='') 
            {echo "แก้ไขข้อมูล";} else{ echo "แก้ไขข้อมูล";}?>">
    </form>
</div>

</body>
</html>