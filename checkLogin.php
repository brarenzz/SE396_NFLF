<?php
session_start();
include ("configDb.php");

if($_POST['Username'] != "" && $_POST['Password'] != ""){
$sql = "SELECT * FROM member WHERE Username ='".$_POST['Username']."'and Password='".$_POST['Password']."'";
$result = mysqli_query($conn, $sql);
$rowcount=mysqli_num_rows($result);
}else{
	echo "Email Incorrect";
	echo " <meta http-equiv='refresh'content='1;URL=login.php'>";
}
if($rowcount > 0){

	$row=mysqli_fetch_array($result);
	$_SESSION["MemberID"] = $row['ID'];
	$_SESSION["Username"] = $row['Username'];
	$_SESSION["PositionUser"] = $row['Position'];
	//$_SESSION["Name"] = $row['firstname'].' '. $row['lastname'];


		$sql = "SELECT * FROM member WHERE Username ='".$_POST['Username']."'and Password='".$_POST['Password']."' ";
		$result = mysqli_query($conn, $sql);
		$record = mysqli_fetch_array($result);

	echo	$status = $record['Position'];

		if ($status=='1'){
	echo " <meta http-equiv='refresh'content='1;URL=admin.php'>";
		}
		if ($status=='2'){

	echo " <meta http-equiv='refresh'content='1;URL=instructor.php'>";
		}
		if ($status=='3'){
	echo " <meta http-equiv='refresh'content='1;URL=labstaff.php'>";
		}
	}

else{
	echo "User Incorrect";
	echo " <meta http-equiv='refresh'content='3;URL=login.php'>";
}
?>
