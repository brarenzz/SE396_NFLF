<?php
include ("configDb.php");
$memberID = $_GET['MemberID'];

$sqlDelete = "DELETE FROM member WHERE ID='$memberID'";
mysqli_query($conn, $sqlDelete);

echo "<script>alert('ลบสมาชิกเสร็จสิ้น')</script>";
                    header("Refresh: 1; url=listMember_admin.php");
?>
