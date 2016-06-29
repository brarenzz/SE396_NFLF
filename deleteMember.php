<?php
include ("configDb.php");
$memberID = $_GET['MemberID'];

$sqlDelete = "DELETE FROM member WHERE ID='$memberID'";
mysqli_query($conn, $sqlDelete);
?>
