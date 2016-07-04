
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
  <?php include("header_index.php") ?>
  <?php include("configDb.php") ?>
<style>
  .frame {
    width: auto;;
    height: auto;
    padding: 30px;
    border: 2px solid #999999;
    border-radius: 10px;
  }

  p.normal {
    font-weight: normal;
  }

  p.thicker {
    font-weight: 900;
  }

</style>
 <?php
     $sqlSelect = "SELECT * FROM info WHERE username = 'admin'";
     $result = mysqli_query($conn,$sqlSelect);
     $row = mysqli_fetch_array($result);
       $history = $row['history'];
       $philosophy = $row['philosophy'];
       $resolution = $row['resolution'];
  ?>
  <div class="container">
    <div class="frame">
        <br><p class="thicker">ประวัติ </p><br>
    <label  name="history" id="history"><p class="normal"> <?php echo $history?></p></label><br>
    </div><br>
    <div class="frame">
        <p class="thicker">ปรัชญา</p><br>
        <label  name="philosophy" id="philosophy"><p class="normal"> <?php echo $philosophy?></p></label><br>
    </div><br>
    <div class="frame">
        <p class="thicker">ปณิธาน</p><br>
        <label  name="resolution" id="resolution"><p class="normal"> <?php echo $resolution?></p></label><br>
    </div>
  </div>


</body>
</html>
