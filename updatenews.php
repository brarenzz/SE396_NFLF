<?php
include("configDb.php");
include("header.php");

	 $id_edite =$_GET ['id_edite'];
	 $topic = $_POST['topic'];
	 $detail = $_POST['detail'];
	 $picture = $_FILES['picture']['name'];


	move_uploaded_file($_FILES["picture"]["tmp_name"],"myfile/".$_FILES["picture"]["name"]);





$sqlUpdate = "UPDATE news SET topic= '$topic', detail= '$detail', picture='$picture' WHERE feedid = '$id_edite'";
mysqli_query($conn,$sqlUpdate);

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
                    header("Refresh: 1; url=newslist.php");
?>
