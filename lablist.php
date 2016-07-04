<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab list</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <?php include ("header_logout.php"); ?>
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
  .frm-lablist{
    width: 700px;
    height: auto;
    background-color: #d9edf7;
    margin: 20px auto 10px auto; /*up right down left (in order)*/
    padding: 30px;
    border: 2px solid #999999;
  }
</style>

<table width="100%" border="1">
<tr>
  <td colspan="2"><div align="center">

</div></td>
</tr>
<tr>
 <td width="20%"><div align="center">
  <div id = "content">

<!-- Menu -->
<?php include("menu_labstaff.php"); ?>

</div></td>
  <td width="100%">
    <!-- Container -->
    <div class="frm-news" >
    <form name="formdisplay" enctype="multipart/form-data">
     <label for="display"> ห้องปฏิบัติการ </label>&nbsp;
    <table width="75%" border="0" cellspacing="8" cellpadding="8">
      <tr>
        <td>รูปภาพ</td>
        <td>ห้องปฎิบัติการณ์</td>
        <td>ประเภทห้องปฎิบัติการณ์</td>
        <td>วันที่เพิ่มห้องปฎิบัติการณ์</td>
        <td>เพิ่มอุปกรณ์</td>
        <td>การกระทำ</td>
      </tr>
      <?php
        $sqlSelect = "SELECT * FROM lab ORDER BY labid DESC";
        $result = mysqli_query($conn,$sqlSelect);
        while($row = mysqli_fetch_array($result)){

          $labname = $row['labname'];
          $labroom = $row['labroom'];
          $daylab = $row['daylab'];
          $labpic = $row['labpic'];
          if($labname == '1'){
            $labname1 = "เคมี";
          }
          if($labname == '2'){
             $labname2 = "ชีวะวิทยา";
          }
           if($labname == '3'){
            $labname3 = "ฟิสิกซ์";
          }
           if($labname == '4'){
            $labname4 = "กายวิพาก";
          }
          /////////////////////////////////////////////////////////////////////////////////
          /////////////////////////////////////////////////////////////////////////////////
      ?>

      <tr>
      <td>
       <img src='lab/<?php echo $labpic ?>' height="100" width="100">
      </td>
      <td><?php echo $labroom ?></td>

      <td> <?php
      if($labname == '1'){
            echo $labname1 = "เคมี";
          }
          if($labname == '2'){
             echo $labname2 = "ชีวะวิทยา";
          }
           if($labname == '3'){
            echo $labname3 = "ฟิสิกซ์";
          }
           if($labname == '4'){
            echo $labname4 = "กายวิพาก";
          }
          ?></td>

      <td><?php echo $daylab ?></td>
      <?php

      echo " <td ><a href=\"addequipment.php?labroom=$row[labroom] \" onclick=\"return confirm(' ต้องการแก้ไขจากระบบจริงหรือไม่ ')\">เพิ่มอุปกรณ์</a></td>";
    ?>

      <?php

      echo " <td ><a href=\"editlab.php?labid=$row[labid]\" onclick=\"return confirm(' ต้องการแก้ไขจากระบบจริงหรือไม่ ')\">แก้ไข</a></td>";
    ?>
     <?php

      echo " <td ><a href=\"deletelab.php?labid=$row[labid]\" onclick=\"return confirm(' ต้องการแก้ไขจากระบบจริงหรือไม่ ')\">ลบ</a></td>";
    ?>
     <?php

      echo " <td ><a href=\"displayequip.php?labroom=$row[labroom]\" onclick=\"return confirm(' ต้องการแก้ไขจากระบบจริงหรือไม่ ')\">ดูอุปกรณ์</a></td>";
    ?>


      </tr>
      <?php } ?>
      </table>
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
</body>
</html>
