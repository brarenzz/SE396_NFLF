<?php
 include("configDb.php");
include("header_index.php");

$topic = $_POST['topic'];
$detail = $_POST['detail'];
 $date = date("Y-m-d");
$picture = $_FILES['picture']['name'];



			move_uploaded_file($_FILES["picture"]["tmp_name"],"myfile/".$_FILES["picture"]["name"]);








 $sql = "INSERT INTO news VALUES ('','$topic','$detail','$picture','$date')"; //1 var needed
 $sql ;
mysqli_query($conn,$sql);


echo "<script>alert('เพิ่มข้อมูลข่าวเสร็จสิ้น')</script>";
                    header("Refresh: 1; url=newslist.php");
?>
