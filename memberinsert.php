<?php
include("configDb.php");
include("header_index.php");

$Username = $_POST['username'];
$Password = $_POST['password'];
$Position = $_POST['position'];

$sql = "INSERT INTO member(ID,Username,Password,Position) VALUES ('','$Username','$Password','$Position')"; //1 var needed

mysqli_query($conn,$sql);

echo "<script>alert('เพิ่มสมาชิกเสร็จสิ้น')</script>";
                    header("Refresh: 1; url=listMember_admin.php");
?>
