<?php
include ("header_index.php");
include ("configDb.php"); 

$equipname = $_POST['equipname'];

$quantity = $_POST['quantity'];
$equipno = $_POST['equipno'];
 $dayequip = date("Y-m-d");
$equippic = $_FILES['equippic']['name'];
$labroom = $_GET['labroom'];


			move_uploaded_file($_FILES["equippic"]["tmp_name"],"equip/".$_FILES["equippic"]["name"]);

$sqls = "SELECT * FROM lab INNER JOIN equip WHERE lab.labroom = equip.labroom";
                            	$sqls;
	mysqli_query($conn,$sqls);


	$sql = "INSERT INTO equip VALUES ('','$equipno','$labroom','$equipname','$quantity','$equippic','$dayequip','')";

	$sql;
	mysqli_query($conn,$sql);



echo "<script>alert('เพิ่มข้อมูลห้องปฎิบัติการณ์เสร็จสิ้น)</script>";
                   header("Refresh: 1; url=lablist.php");
?>
