<?php
include ("header_index.php");
include ("configDb.php"); 

	 $labid =$_GET ['labid'];
	 $labname = $_POST['labname'];
	 $labroom = $_POST['labroom'];
	 $labpic = $_FILES['labpic']['name'];


	move_uploaded_file($_FILES["labpic"]["tmp_name"],"lab/".$_FILES["labpic"]["name"]);




if($labpic==''){
$sqlUpdate = "UPDATE lab SET labname= '$labname', labroom= '$labroom' WHERE labid = '$labid'";
}else{
	$sqlUpdate = "UPDATE lab SET labname= '$labname', labroom= '$labroom', labpic='$labpic' WHERE labid = '$labid'";
}


mysqli_query($conn,$sqlUpdate);

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
                    header("Refresh: 1; url=lablist.php");
?>
