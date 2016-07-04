<?php
include ("header_index.php");
 include ("configDb.php"); 

  	$equipID =$_GET ['equipID'];
	$equipstate = $_POST['equipstate'];



	$sql = "UPDATE equip SET equipstate='$equipstate' WHERE equipID = '$equipID' " ;
	$sql;

	mysqli_query($conn,$sql);




echo "<script>alert('เพิ่มข้อมูลห้องปฎิบัติการณ์เสร็จสิ้น)</script>";
                   header("Refresh: 1; url=equipuser.php");
?>
