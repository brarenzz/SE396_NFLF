<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>News</title>
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
    width: 120px;
    height: 120px;


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
 <?php

  $id_edite =$_GET['id_edite']; ?>

<?php
    $sqlSelect = "SELECT * FROM news WHERE feedid = '$id_edite'";
    $result = mysqli_query($conn,$sqlSelect);
    $row = mysqli_fetch_array($result);
      $topic = $row['topic'];
      $detail = $row['detail'];
      $picture = $row['picture'];

        ?>
<div class="frm-news">
<form name="formadd" action="updatenews.php?id_edite=<?=$id_edite?>" method="post" enctype="multipart/form-data">
  <label for="addNewsForm"><h3>แก้ไขข่าว</h3></label>
  <table width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>หัวข้อข่าว</td>
      <td><input type="text" class="control-form" name="topic" id="topic" placeholder="topic" value="<?php echo $topic?>"></td>
    </tr>
    <tr>
      <td><br>รายละเอียด</td>
      <td><br><textarea rows="9" cols="60" name="detail" id="detail" placeholder="detail" value="<?php echo $detail?>"><?php echo $detail?></textarea></td>
    </tr>
    <tr>
     <td>
     <div class="picture">
  <br><img src='myfile/<?php echo $picture ?>' width="120" height="120">

  </div>
  </td>
      <td colspan="2"><div align="center">

          <input name="hiddenField" type="hidden" value="add_n">

        </div></td>
    </tr>
    </table>
    <br><br><input type="file" name="picture" id="picture">
   <br><button type="submit" value="ok" name ="submit" id="submit" class="btn btn-success" onclick="return confirm('ต้องการแก้ไขจากระบบจริงหรือไม่')">ok</button>


  </form>
  </div>
<div class="box">

</div>

</body>
</html>
