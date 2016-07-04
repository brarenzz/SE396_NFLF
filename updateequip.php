<?php
include ("header_index.php");
include ("configDb.php"); 

$equipID =$_GET['equipID'];
 $equippic = $_FILES['equippic']['name'];


	move_uploaded_file($_FILES["equippic"]["tmp_name"],"equip/".$_FILES["equippic"]["name"]);




if($equippic==''){
$sqlUpdate = "UPDATE equip SET WHERE equipID = '$equipID'";
}else{
	$sqlUpdate = "UPDATE equip SET equippic='$equippic' WHERE equipID = '$equipID'";
}


mysqli_query($conn,$sqlUpdate);

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
                    header("Refresh: 1; url=showunallow.php");
?>
