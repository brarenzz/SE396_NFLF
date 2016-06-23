<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>News</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php include("header.php") ?>
<?php include("configDb.php") ?>
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

<div class="frm-news">
<form name="formadd" action="insertnews.php" method="post" enctype="multipart/form-data">
  <label for="addNewsForm"><h3>เพิ่มข่าวใหม่ </h3></label>&nbsp;
  <table width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><br>หัวข้อข่าว</td>
      <td><br><input type="text" class="control-form" name="topic" id="topic" placeholder="topic" style="width:50%"></td>
    </tr>
    <tr>
      <td>รายละเอียด</td>
      <td><br><textarea  rows="9" cols="60" name="detail" id="detail" placeholder="detail"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input name="hiddenField" type="hidden" value="add_n">
        </div></td>
    </tr>
    </table>
    <br><input type="file" name="picture">
    <br><input type="submit" value="submit" name="submit" id="submit" class="btn btn-success">
</form>
  </div>
<div class="box">

</div>

</body>
</html>
