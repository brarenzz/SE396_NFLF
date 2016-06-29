<?php session_start();?>

<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
  <?php include("header_logout.php") ?>
  <?php include("configDb.php") ?>


 <?php
     $sqlSelect = "SELECT * FROM info WHERE username = 'admin'";
     $result = mysqli_query($conn,$sqlSelect);
     $row = mysqli_fetch_array($result);
       $history = $row['history'];
       $philosophy = $row['philosophy'];
       $resolution = $row['resolution'];
  ?>

  <style>
  #content{
    width: auto;
    height: 790px;
    margin: 0 auto;
  }
  </style>
  
  <table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">

  </div></td>
  </tr>
  <tr>
   <td width="10%"><div align="center">

  <!-- Menu -->
  <div id = "content">
  <?php include("menu_instructor.php"); ?>
  </div>
  </div></td>
    <td width="100%">

  <div class="container">
    <form action="updategroupinfo.php" method="post" enctype="multipart/form-data">
    <table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>ประวัติ</td>
        <td><br><textarea rows="10" cols="60" name="history" id="history" placeholder="history" ><?php echo $history?></textarea></td>
      </tr>
      <tr>
        <td><br>ปรัชญา</td>
        <td><br><textarea rows="10" cols="60" name="philosophy" id="philosophy" placeholder="philosophy"><?php echo $philosophy?></textarea></td>
      </tr>
      <tr>
        <td><br>ปณิธาน</td>
        <td><br><textarea rows="10" cols="60" name="resolution" id="resolution" placeholder="resolution"><?php echo $resolution?></textarea></td>
      </tr>
      <tr>
       <td>
    </table>
    <br>
    <br>
    <button type="submit" value="ok" name ="submit" id="submit" class="btn btn-success" onclick="return confirm('ต้องการแก้ไขจากระบบจริงหรือไม่')">ตกลง</button>
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
