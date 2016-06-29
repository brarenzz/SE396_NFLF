<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php include ("header_index.php") ?>
<?php include ("configDb.php"); ?>
<style type="text/css">
  .frm-news{ /*class with dot*/
    width: 700px;
    height: auto;
    background-color: #d9edf7;
    margin: 20px auto 10px auto; /*up right down left (in order)*/
    padding: 30px;
    border: 2px solid #999999;
  }
    .insert-picture-box{
    width: 150px;
    height: 150px;
    background-color: #fff;
  }
  .picture{
    width: 180px;
    height: 180px;
    background-color: #fff;
  }
  .frm-displaynews{
    width: 700px;
    height: auto;
    background-color: #d9edf7;
    margin: 20px auto 10px auto; /*up right down left (in order)*/
    padding: 30px;
    border: 2px solid #999999;
  }
</style>
<font size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เกี่ยวกับกลุ่มวิชา </font>
<font size="4">&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;บุคลากร </font>
<?php
  $sqlSelect = "SELECT * FROM member ";
  $result = mysqli_query($conn, $sqlSelect);
  $row = mysqli_fetch_array($result);
  $sqlSelect = "SELECT * FROM member ";
  $result = mysqli_query($conn,$sqlSelect);
  while($row = mysqli_fetch_array($result)){
      $Picture = $row['Picture'];
      $Firstname = $row['Firstname'];
      $Lastname = $row['Lastname'];
      $Subject = $row['Subject'];
      $OfficeRoom = $row['OfficeRoom'];
      $Appointment = $row['Appointment'];
      $Education = $row['Educationbackground'];
      $TelNumber = $row['TelNumber'];
      $Email = $row['Email'];
  ?>
  <form class="frm-displaynews" >
 <tr>
  <td>
   <img src='imgMember/<?php echo $Picture ?>' height="100" width="100">
  </td>
<table width="75%" border="0" cellspacing="8" >
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
  <tr>
    <td>อีเมลล์</td>
    <td><?php echo $Email; ?></td>
    </tr>
  </tr>
  <?php } ?>
  </table>
</form>
</body>
</html>
