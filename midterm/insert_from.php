<!DOCTYPE html>
<html>
<body>
<style>
input[type=text], input[type=date]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 4px;
}
.button {
    width: 100%;
    background-color: blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
h2 {
    text-align: center;
    color: blue;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<h2>เพิ่มข้อมูลนักศึกษา</h2>
<!-- นี่กรอกฟอร์ม ตอน send ก็ post request ไปที่ไฟล์ insert.php -->
<div>
  <form action="insertdb.php" method="post" id="form">
    <label>ชื่อภาพยนต์</label>
    <input type="text" name="namemovie" placeholder="Name Movie..">

    <label>เวลาที่เริ่มฉาย</label>
    <input type="text" name="dtime">

    <input type="submit" value="บันทึก" class="button">
  </form>
</div>
</body>
</html>