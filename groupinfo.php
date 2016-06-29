
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
  <?php include("header_index.php") ?>
  <?php include("configDb.php") ?>



 <?php
     $sqlSelect = "SELECT * FROM info WHERE username = 'admin'";
     $result = mysqli_query($conn,$sqlSelect);
     $row = mysqli_fetch_array($result);
       $history = $row['history'];
       $philosophy = $row['philosophy'];
       $resolution = $row['resolution'];
  ?>
  <div class="container">
    <div>
        ประวัติ<br><br>
        <label  name="history" id="history"><?php echo $history?></label><br><br>
    </div>
    <div>
        ปรัชญา<br><br>
        <label  name="philosophy" id="philosophy"><?php echo $philosophy?></label><br><br>
    </div>
    <div>
        ปณิธาน<br><br>
        <label  name="resolution" id="resolution"><?php echo $resolution?></label><br><br>
    </div>
  </div>


</body>
</html>
