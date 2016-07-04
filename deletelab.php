<?php
include ("header_index.php");
include ("configDb.php");

	 $labid =$_GET ['labid'];

$sqlUpdate = "DELETE FROM lab WHERE labid = '$labid'";
mysqli_query($conn,$sqlUpdate);

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
                    header("Refresh: 1; url=lablist.php");
?>
