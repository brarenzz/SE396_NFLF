<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The Lab</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

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
  .frm-equipdisplay{
    width: 700px;
    height: auto;
    background-color: #d9edf7;
    margin: 20px auto 10px auto; /*up right down left (in order)*/
    padding: 30px;
    border: 2px solid #999999;
}

</style>
<?php $labroom = $_GET['labroom'];
?>
<div class="frm-equip">
<form name="formequip" action="insertequipment.php?labroom=<?=$labroom?>" method="post" enctype="multipart/form-data">
  <label for="addNewsForm">เพิ่มข้อมูลในห้องปฎิบัติการณ์</label>&nbsp;
  <table width="80%" border="0" cellspacing="8" cellpadding="9">
        <tr>
        <td>รหัสอุปกรณ์</td>
        </tr>
        <td><input type="text" class="control-form" name="equipno" id="equipno" placeholder="equipno"></td>
    </tr>
        <tr>
        <td>ชื่ออุปกรณ์</td>
        </tr>
        <td><input type="text" class="control-form" name="equipname" id="equipname" placeholder="equipname"></td>
    </tr>

    <tr>
      <td>จำนวน</td>
      <tr>
      <td><input type="text" class="control-form" name="quantity" id="quantity"></textarea></td>
      </tr>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input name="hiddenField" type="hidden" value="add_n">
        </div></td>
    </tr>
    </table>
    <input type="file" name="equippic">
    <input type="submit" value="submit" name="submit" id="submit">
</form>


  </div>



</body>

</html>
