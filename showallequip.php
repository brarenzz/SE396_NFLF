<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <?php include ("header_index.php"); ?>
  <?php include ("configDb.php"); ?>
<style type="text/css">

  .frm-equip{ /*class with dot*/
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
  .frm-displayequip{
    width: 700px;
    height: auto;
    background-color: #d9edf7;
    margin: 20px auto 10px auto; /*up right down left (in order)*/
    padding: 30px;
    border: 2px solid #999999;

</style>

<div class="frm-equip" >
<form name="formdisplay" enctype="multipart/form-data">
 <label for="display">ข่าว</label>&nbsp;
<table width="75%" border="0" cellspacing="8" cellpadding="8">
  <tr>
    <td>รหัสอุปกรณ์</td>
    <td>รูปภาพ</td>
    <td>ชื่อุปกรณ์</td>
    <td>ห้องปฎิบัติการณ์</td>
    <td>จำนวน</td>
    <td>สถานะ</td>
    <td>วันที่เพิ่มอุปกรณ์</td>
  </tr>
  <?php



    $sqlSelect = "SELECT * FROM equip ";
    $result = mysqli_query($conn,$sqlSelect);
    while($row = mysqli_fetch_array($result)){

      $equipno = $row['equipno'];
      $dayequip = $row['dayequip'];
      $equippic = $row['equippic'];
      $quantity= $row['quantity'];
      $equipID= $row['equipID'];
      $labroom= $row['labroom'];
      $equipstate= $row['equipstate'];
      $equipname=$row['equipname'];
      /////////////////////////////////////////////////////////////////////////////////
      /////////////////////////////////////////////////////////////////////////////////
  ?>

  <tr>
  <td><?php echo $equipno ?></td>
  <td>
   <img src='equip/<?php echo $equippic ?>' height="100" width="100">
  </td>
  <td><?php echo $equipname ?></td>
  <td><?php echo $labroom ?></td>
  <td><?php echo $quantity ?></td>
     <td><?php
      if($equipstate==''){
        echo "ไม่ได้รับการระบุ";
      }
      if($equipstate=='1'){
        echo "อนุญาติ";
      }
      if($equipstate=='2'){
        echo "ไม่อนุญาติ";
      }

           ?></td>
  <td><?php echo $dayequip ?></td>



  </tr>
  <?php } ?>
  </table>
</form>
  </div>
</body>
</html>
