<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The Lab</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <?php include ("header_index.php"); ?>
  <?php include ("configDb.php"); ?>
<style type="text/css">

  .frm-lab{ /*class with dot*/
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
<?php

  $labid =$_GET['labid']; ?>

<?php
    $sqlSelect = "SELECT * FROM lab WHERE labid = '$labid'" ;
    $result = mysqli_query($conn,$sqlSelect);
    $row = mysqli_fetch_array($result);
      $labname = $row['labname'];
      $labroom = $row['labroom'];
      $labdes= $row['labdes'];
      $daylab = $row['daylab'];
      $labpic = $row['labpic'];

        ?>

<div class="frm-lab">
<form name="formlab" action="updatelab.php?labid=<?=$labid?>" method="post" enctype="multipart/form-data">
  <label for="addNewsForm" >เพิ่มข้อมูลห้องปฎิบัติการณ์</label>&nbsp;
  <table width="80%" border="0" cellspacing="8" cellpadding="9">
    <tr>
      <td>ห้องปฎิบัติการณ์</td>
      <tr>
      <td><input type="text" class="control-form" name="labroom" id="labroom" placeholder="labroom" value=" <?php echo $labroom?>"></td>
        </tr>
        <tr>
        <td>ประเภทห้องปฎิบัติการณ์</td>
        </tr>
        <td><select name="labname">
          <option value="<?php echo $labname ?>" name="labname">--โปรดเลือกประเภทห้องปฎิบัติการณ์--</option>
          <option value="1" name="labname">เคมีวิทยา</option>
        <option value="2" name="labname">ชีวะวิทยา</option>
          <option value="3" name="labname">ฟิสิกซ์</option>
          <option value="4" name="labname">กายวิภาค</option>
        </select></td>
    </tr>
    <tr>
      <td>ข้อมูลห้องปฎิบัติการณ์</td>
      <tr>
      <td><textarea class="control-form" name="labdes" id="labdes" value="<?php echo $labdes?>"><?php echo $labdes?></textarea></td>
      </tr>
    </tr>
    <tr>
    <td>
    <div class="picture">
  <img src='lab/<?php echo $labpic ?>' width="120" height="120">

  </div>
  </td>
      <td colspan="2"><div align="center">
          <input name="hiddenField" type="hidden" value="add_n">
        </div></td>
    </tr>
    </table>
    <input type="file" name="labpic" id="labpic">
    <input type="submit" value="submit" name="submit" id="submit">
</form>
  </div>

</body>
</html>
