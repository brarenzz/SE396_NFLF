<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php session_start(); include ("header_logout.php"); ?>
<?php include ("configDb.php"); ?>
<style type="text/css">
	.frm-login{
		width: 700px;
		background: white;
		margin: 20px auto 10px auto;
		padding: 30px;
		border: 5px solid black;

	}
    #content{
  width: 70%;
  height: 790px;
  margin: 0 auto;
}

</style>
  <table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">
  </div></td>
  </tr>
   <td width="20%"><div align="center">
  <!-- Menu -->
  <div id = "content">
   <?php
	 			if ($_SESSION['PositionUser'] == '1') {
	 					include("menu_admin.php");
	 				}
        if ($_SESSION['PositionUser'] == '2') {
            include("menu_instructor.php");
          }
       if ($_SESSION['PositionUser'] == '3'){
            include("menu_labstaff.php");
          }
?>
</td>
  </div>
  </div></td>
    <td width="100%">
      <!-- Container -->
  <?php
  if($_GET["MemberID"]==""){
    echo " <meta http-equiv='refresh'content='3;URL=listmember.php'>";
  }else{
  $memberID = $_GET["MemberID"];
  $sqlSelect = "SELECT * FROM member where ID = $memberID";
  $result = mysqli_query($conn, $sqlSelect);
  $row = mysqli_fetch_array($result);
    $MemberID = $row['ID'];
    $Firstname = $row['Firstname'];
    $Lastname = $row['Lastname'];
    $Subject = $row['Subject'];
    $OfficeRoom = $row['OfficeRoom'];
    $Appointment = $row['Appointment'];
    $Education = $row['Educationbackground'];
    $TelNumber = $row['TelNumber'];
    $Status = $row['Status'];
    $Picture = $row['Picture'];
    $Email = $row['Email'];
    $Password = $row['Password'];

?>

<div class="frm-login">
<form action="updateMember.php" method="POST" enctype ="multipart/form-data" >
<input type = "hidden" name="ID" value="<?=$MemberID ?>">

<form>
<div class="picture" >
  <img src='imgMember/<?php echo $Picture ?>' width="120" height="120">
  </div>

    <label >File Image</label>
    <input type="file"  name="Picture" value='<?=$Picture ?>'>


 <div class="form-group">
    <label for="exampleInputName">ชื่อ</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="Firstname" name="Firstname" value='<?=$Firstname?>'>
  </div>
  <div class="form-group">
    <label for="exampleInputLastname">นามสกุล</label>
    <input type="text" class="form-control" id="exampleInputLastname" placeholder="Lastname" name="Lastname" value='<?=$Lastname?>'>
  </div>
  <div class="form-group">
    <label for="exampleInputSubject">วิชา</label>
    <input type="text" class="form-control" id="exampleInputSybject" placeholder="Subject" name="Subject" value='<?=$Subject?>'>
  </div>
  <div class="form-group">
    <label for="exampleInputSubject">Office Room</label>
    <input type="text" class="form-control" id="exampleInputOfficeRoom" placeholder="Office Room" name="OfficeRoom" value='<?=$OfficeRoom?>'>
  </div>
     <div class="form-group">
    <label for="exampleInputSubject">ตำแหน่ง</label>
    <input type="text" class="form-control" id="exampleInputAppointment" placeholder="Appointment" name="Appointment" value='<?=$Appointment?>'>
  </div>
  <div class="form-group">
    <label for="exampleInputEducation">การศึกษา</label>
    <input type="text" class="form-control" id="exampleInputEducation" placeholder="Education" name="Educationbackground" value='<?=$Education?>'>
  </div>
    <div class="form-group">
    <label for="exampleInputTelNumber">เบอร์โทรศัพท์ ติดต่อ</label>
    <input type="text" class="form-control" id="exampleInputTelNumber" placeholder="091-9999999" name="TelNumber" value='<?=$TelNumber?>'>
  </div>
    <div class="form-group">
    <label for="exampleInputStatus">สถานะ</label>
    <input type="text" class="form-control" id="exampleStatus" placeholder="admin or user" name="Status" value='<?=$Status?>'>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="Email" value='<?=$Email?>'>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
  <!-- Footer -->
  <b>Basic Science Information System</b> ( Version 1.0 )
  </div></td>
  </tr>
</table>
<?php } ?>
</body>
</html>
