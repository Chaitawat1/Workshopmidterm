<!DOCTYPE html>
<body>
<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "movie";

// สร้างการเชื่อต่อcon
$conn = new mysqli($servername, $username, $password, $dbname);
// เช็คว่าcon errorมั้ย errorว่าอะไร
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8"); //ภาษา

// เอาค่าจาก post body มาเก็บๆ ใส่ตัวแปร ตามชื่อ
$fname = isset ($_POST['namemovie']) ? $_POST['namemovie']:'';
$date = isset ($_POST['dtime']) ? $_POST['dtime']:'';
$edit = isset ($_POST['edit']) ? $_POST['edit']:'';
$id = isset ($_POST['id']) ? $_POST['id']:'';

// เช็คว่า ไอดีไม่ได้ว่าง
if($id!=''){
  // ถ้ามีไอดีอยู่แล้ว ให้อัพเดตแถวนั้นๆ หรือแก้ไขแถวนั้นๆ
    $sql = "UPDATE class SET namemovie ='".$namemovie."', 
                            dtime ='".$dtime."',                               
                            WHERE id='".$id."'";
}else{
  // ถ้าไม่มี id ก็เป็นการเพิ่มแถวเข้าไป
    $sql = "INSERT INTO class (id, namemovie, dtime, username, password) 
        VALUES('', '$namemovie', '$dtime', '$username','$password')";
}
//ทำการคิวรี่ เช็คว่าได้ไม่ได้
if($conn->query($sql)==TRUE){
    if($id!=''){
      // ถ้าอัพเดตสำเร็จ
        echo "<script>";
        echo "alert('Update Successfully');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }else{ 
  // ต่อดาต้าเบสไม่ได้ เควรี่ไม่สำเร็จ
    echo "ERROR: " . $sql ."<br>" .$conn->error;
    }
}
$conn->close(); // ปิดคอนเนคชั่น
?>
</body>
</html>