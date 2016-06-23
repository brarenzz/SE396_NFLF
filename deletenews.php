<?php
include("configDb.php");
 include("header.php");
	 
	 $id_edite =$_GET ['id_edite'];

$sqlUpdate = "DELETE FROM news WHERE feedid = '$id_edite'";
mysqli_query($conn,$sqlUpdate);

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
                    header("Refresh: 1; url=newslist.php");
?>
