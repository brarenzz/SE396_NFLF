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
        if ($_SESSION['PositionUser'] == '2') {
            include("menu_instructor.php");
          }
       if ($_SESSION['PositionUser'] == '3'){
            include("menu_labstaff.php");
          }
?>
</div>
<?php
  $sqlSelect = "SELECT * FROM member WHERE ID = '$setMember'";
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
	</div>
  </td>
    <td width="100%">
    	<!-- Container -->
	<div id = "header">
</div>
<div id = "content">
<table class="table table-hover">
  <tr>
  	<td>ชื่อ</td>
    <td><?php echo $Firstname; ?></td>
  </tr>
  <tr>
  	<td>นามสกุล</td>
    <td><?php echo $Lastname; ?></td>
  </tr>
  <tr>
  	<td>วิชา</td>
    <td><?php echo $Subject; ?></td>
    </tr>
  <tr>
  	<td>Office Room</td>
    <td><?php echo $OfficeRoom; ?></td>
    </tr>
  <tr>
  	<td>ตำแหน่ง</td>
    <td><?php echo $Appointment; ?></td>
    </tr>
  <tr>
  	<td>การศึกษา</td>
    <td><?php echo $Education; ?></td>
    </tr>
  <tr>
  	<td>เบอร์โทรศัพท์</td>
    <td><?php echo $TelNumber; ?></td>
    </tr>
  <tr>
  	<td>สถานะ</td>
    <td><?php echo $Status; ?></td>
    </tr>
  <tr>
  	<td>อีเมลล์</td>
    <td><?php echo $Email; ?></td>
    </tr>
  <tr>
 <td><div style="margin-left:50%"> <button type="button" class="btn btn-primary" onclick="window.location='editMember.php?MemberID=<?=$MemberID?>';">แก้ไข</button> </div></td>
 <td><div > <button type="button" class="btn btn-danger" onclick="return confirm('You Sure...'); window.location='deleteMember.php?MemberID=<?=$MemberID?>'; " >ลบ</button> </div></td>
  <tr>
  </tr>
  </tr>
  <tr>
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
