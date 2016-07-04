<?php
include ("header_index.php");
include ("configDb.php");
$labname = $_POST['labname'];
$labdes = $_POST['labdes'];
$labroom= $_POST['labroom'];
 $daylab = date("Y-m-d");
$labpic = $_FILES['labpic']['name'];



			move_uploaded_file($_FILES["labpic"]["tmp_name"],"lab/".$_FILES["labpic"]["name"]);


 $sql = "INSERT INTO lab VALUES ('','$labname','$labdes','$labroom','$labpic','$daylab','')"; //1 var needed
 $sql ;
mysqli_query($conn,$sql);


echo "<script>alert('เพิ่มข้อมูลห้องปฎิบัติการณ์เสร็จสิ้น)</script>";
                    header("Refresh: 1; url=lablist.php");
?>
