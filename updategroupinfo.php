<?php
 include("configDb.php");
include("header_index.php");

$history = $_POST['history'];
$philosophy = $_POST['philosophy'];
$resolution = $_POST['resolution'];
$date = date("Y-m-d");

 $sqlUpdate = "UPDATE info SET history = '$history', philosophy = '$philosophy', resolution = '$resolution', dates = '$date' WHERE username = 'admin'";

mysqli_query($conn,$sqlUpdate);


echo "<script>alert('แก้ไขข้อมูลกลุ่มวิชาเสร็จสิ้น')</script>";
                    header("Refresh: 1; url=groupinfo.php");
?>
