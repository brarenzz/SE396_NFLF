<?php session_start();
if(isset($_SESSION['MemberID'])) {
	$setMember = $_SESSION['MemberID'];
}else{
	$setMember = '';
}
if ($setMember==""){
	echo "Plese Login again";
	echo " <meta http-equiv='refresh'content='5;URL=login.php'>";
}else{
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>

	#content{
	width: 70%;
	height: 790px;
	margin: 0 auto;
}
	.login{
		width: auto;
		float: right;
		margin: 10px 30px;
	}
}
</style>
</head>
<body>

<?php include ("header_logout.php"); ?>
<?php include ("configDb.php"); ?>


	<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">

	</div></td>
  </tr>

   <td width="20%">

   <div style="margin-top :10px">

	<!-- Menu -->
<div id = "content">
  <?php
				if ($_SESSION['PositionUser'] == '1') {
						include("menu_admin.php");
					}
?>
</div>

	</div>
  </td>
    <td width="100%">
    	<!-- Container -->
	<div id = "header">
</div>
<div id = "content">
<table class="table table-striped">
  <tr>
  	<td>ชื่อ</td>
  	<td>นามสกุล</td>
  	<td>วิชา</td>
  	<td>Office Room</td>
  	<td>ตำแหน่ง</td>
  	<td>การศึกษา</td>
  	<td>เบอร์โทรศัพท์</td>
  	<td>สถานะ</td>
  	<td>อีเมลล์</td>
    <td>ลบ</td>
    <td>แก้ไข</td>
  </tr>
  <?php
    $sqlSelect = "SELECT * FROM member";
    $result = mysqli_query($conn, $sqlSelect);
    while ($row = mysqli_fetch_array($result)){
      $MemberID = $row['ID'];
      $Firstname = $row['Firstname'];
      $Lastname = $row['Lastname'];
      $Subject = $row['Subject'];
      $OfficeRoom = $row['OfficeRoom'];
      $Appointment = $row['Appointment'];
      $Education = $row['Educationbackground'];
      $TelNumber = $row['TelNumber'];
      $Status = $row['Status'];
      $Email = $row['Email'];
      $Image = $row['Picture'];
      $Position = $row['Position'];
    ?>
  <tr>
    <td><?php echo $Firstname; ?></td>
    <td><?php echo $Lastname; ?></td>
    <td><?php echo $Subject; ?></td>
    <td><?php echo $OfficeRoom; ?></td>
    <td><?php echo $Appointment; ?></td>
    <td><?php echo $Education; ?></td>
    <td><?php echo $TelNumber; ?></td>
    <td><?php echo $Status; ?></td>
    <td><?php echo $Email; ?></td>
    <td><a href="editMember_admin.php?MemberID=<?=$MemberID?>">แก้ไข</a></td>
		<td><a onclick="return confirm('ยืนยันการลบข้อมูล?')" href="deletemember.php?MemberID=<?=$MemberID?>">ลบ</a></td>
  </tr>
  <?php }?>
</table>
</div>
  <tr>
    <td colspan="2"><div align="center">
	<!-- Footer -->
	<b>Basic Science Information System</b> ( Version 1.0 )
	</div></td>
  </tr>
</table>
</body>
<?php } ?>
