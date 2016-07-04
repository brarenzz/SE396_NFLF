<?php
include("configDb.php");
include("header_index.php");

	 $id_edite =$_GET ['id_edite'];

   $sqlDelete = "DELETE FROM blogs WHERE blogid = '$id_edite'";
   mysqli_query($conn,$sqlDelete);

   echo "<script>alert('ทำการลบสาระน่ารู้เรียบร้อยแล้ว')</script>";
    header("Refresh: 1; url=blogadd.php");
?>
