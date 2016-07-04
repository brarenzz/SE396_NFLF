<?php
include("configDb.php");
include("header_index.php");

	 $id_edite =$_GET ['id_edite'];
	 $topic = $_POST['topic'];
	 $detail = $_POST['detail'];
   $date = date("Y-m-d");
	 $picture = $_FILES['picture']['name'];

	move_uploaded_file($_FILES["picture"]["tmp_name"],"myfile/".$_FILES["picture"]["name"]);

  if($picture==''){
	   $sqlUpdate = "UPDATE blogs SET topic = '$topic', detail = '$detail' WHERE blogid = '$id_edite'";
	}else{
		  $sqlUpdate = "UPDATE blogs SET topic = '$topic', detail = '$detail', picture ='$picture' WHERE blogid = '$id_edite'";
	}
  mysqli_query($conn,$sqlUpdate);

  echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
                    header("Refresh: 1; url=blogadd.php");
?>
