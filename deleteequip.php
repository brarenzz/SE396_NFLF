<?php
 include ("header_index.php");
 include ("configDb.php");

	 $equipID =$_GET ['equipID'];

$sqlUpdate = "DELETE FROM equip WHERE equipID = '$equipID'";
mysqli_query($conn,$sqlUpdate);

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
                    header("Refresh: 1; url=lablist.php");
?>
