<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  
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
        <label for="display"><h3>สาระน่ารู้</h3><br></label>&nbsp;
          <table width="75%" border="0" cellspacing="8" cellpadding="8">
            <tr>
              <td><h4><B>รูปภาพ</h4></td>
                <td><h4><B>หัวสาระน่ารู้</h4></td>
                  <td><h4><B>วันที่เพิ่มสาระน่ารู้</h4></td>
            </tr>
  <?php
    $sqlSelect = "SELECT * FROM blogs ORDER BY blogid DESC";
    $result = mysqli_query($conn,$sqlSelect);
    while($row = mysqli_fetch_array($result)){

      $topic = $row['topic'];
      $date = $row['dates'];
      $picture = $row['picture'];
      /////////////////////////////////////////////////////////////////////////////////
      /////////////////////////////////////////////////////////////////////////////////
  ?>

      <tr>
        <td>
          <br><img src='myfile/<?php echo $picture ?>' height="100" width="100">
        </td>
        <td><?php echo $topic ?></td>
        <td><?php echo $date ?></td>
        <?php
          echo " <td ><a href=\"blogedit.php?id_edite=$row[blogid]\" onclick=\"return confirm(' ต้องการแก้ไขจากระบบจริงหรือไม่ ')\">แก้ไข</a></td>";
        ?>
        <?php
          echo " <td ><a href=\"blogdelete.php?id_edite=$row[blogid]\" onclick=\"return confirm(' ต้องการแก้ไขจากระบบจริงหรือไม่ ')\">ลบ</a></td>";
        ?>
    </tr>
    <?php } ?>
</table>
</form>
</div>
</body>
</html>
