<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The Lab</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <?php include ("header_logout.php"); ?>
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

<table width="100%" border="1">
<tr>
  <td colspan="2"><div align="center">

</div></td>
</tr>
<tr>
 <td width="20%"><div align="center">
  <div id = "content">

<!-- Menu -->
<?php include("menu_labstaff.php"); ?>

</div></td>
  <td width="100%">
    <!-- Container -->
    <div class="frm-lab">
    <form name="formlab" action="insertlab.php" method="post" enctype="multipart/form-data">
      <label for="addNewsForm" >เพิ่มข้อมูลห้องปฎิบัติการณ์</label>&nbsp;
      <table width="80%" border="0" cellspacing="8" cellpadding="9">
        <tr>
          <td>ห้องปฎิบัติการณ์</td>
          <tr>
          <td><input type="text" class="control-form" name="labroom" id="labroom" placeholder="labroom"></td>
            </tr>
            <tr>
            <td>ประเภทห้องปฎิบัติการณ์</td>
            </tr>
            <td><select name="labname">
              <option value="labname" name="labname">--โปรดเลือกประเภทห้องปฎิบัติการณ์--</option>
              <option value="1" name="labname">เคมีวิทยา</option>
            <option value="2" name="labname">ชีวะวิทยา</option>
              <option value="3" name="labname">ฟิสิกซ์</option>
              <option value="4" name="labname">กายวิภาค</option>
            </select></td>
        </tr>
        <tr>
          <td>ข้อมูลห้องปฎิบัติการณ์</td>
          <tr>
          <td><textarea class="control-form" name="labdes" id="labdes"></textarea></td>
          </tr>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
              <input name="hiddenField" type="hidden" value="add_n">
            </div></td>
        </tr>
        </table>
        <input type="file" name="labpic">
        <input type="submit" value="submit" name="submit" id="submit">
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
