<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php include("configDb.php") ?>
<?php include("header.php") ?>
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

</style>


<div class="frm-displaynews" >
<form name="formdisplay" enctype="multipart/form-data">
 <label for="display">ข่าว</label>&nbsp;
<table width="75%" border="0" cellspacing="8" cellpadding="8">
  <tr>
    <td>รูปภาพ</td>
    <td>หัวข้อข่าว</td>
    <td>วันที่เพิ่มข่าว</td>
  </tr>
  <?php
    $sqlSelect = "SELECT * FROM news";
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
   <img src='myfile/<?php echo $picture ?>' height="100" width="100">
  </td>
<?php
  echo " <td ><a href=\"readnews.php?id_edite=$row[feedid]\">$topic</a></td>";
?>
  <td><?php echo $date ?></td>

  </tr>
  <?php } ?>
  </table>
</form>
  </div>
</body>
</html>
