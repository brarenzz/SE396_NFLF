<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <?php include("configDb.php") ?>
  <?php include("header_index.php") ?>
  <style>

    .insert-picture-box{
      width: 150px;
      height: 150px;
    }

    .picture{
      width: 250px;
      height: 200px;
    }

    .frm-displaynews{
      width: 1000px;
      height: auto;
      margin: 20px auto 10px auto; /*up right down left (in order)*/
      padding: 30px;
      border: 2px solid #999999;
    }

  </style>

  <div class="frm-displaynews" >
    <form name="formdisplay" enctype="multipart/form-data">
      <label for="display"><h2><FONT FACE="JasmineUPC"><B> สาระน่ารุ้ </FONT></h2></label>&nbsp;
        <table width="75%" border="0" cellspacing="8" cellpadding="8">

  <?php
    $sqlSelect = "SELECT * FROM blogs ORDER BY blogid DESC";
    $result = mysqli_query($conn,$sqlSelect);
    while($row = mysqli_fetch_array($result)){

      $topic = $row['topic'];
      $date = $row['dates'];
      $picture = $row['picture'];
  ?>

  <tr>
    <td>
      <br><img src='myfile/<?php echo $picture ?>' height="150" width="300">
    </td>
    <?php
      echo " <td><a href=\"blogread.php?id_edite=$row[blogid]\"> $topic </a></td>";
    ?>
    <td align="right"><span class="glyphicon glyphicon-time" aria-hidden="true"></span><?php echo $date ?></td>
  </tr>
<?php } ?>
</table>
</form>
</div>
</body>
</html>
