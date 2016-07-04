<?php
include ("configDb.php");
$TITLE = $_POST['title'];
$START = $_POST['start'];
$END = $_POST['end'];

$sql = "INSERT INTO tb_event VALUES ('','$TITLE','$START','$END')";
$result = mysqli_query($conn, $sql);
if($result){
  echo " <meta http-equiv='refresh'content='3;URL=admin.php'>";
}
?>
