<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
  <?php include("header_logout.php") ?>
  <?php include("configDb.php") ?>

  <style>
    #content{
      width: auto;
      height: 790px;
      margin: 0 auto;
    }
  </style>

  <table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">

  </div></td>
  </tr>
  <tr>
   <td width="10%"><div align="center">

  <!-- Menu -->
  <div id = "content">
  <?php include("menu_instructor.php"); ?>
  </div>
  </div></td>
    <td width="100%">
      <!-- Container -->
      <div class="container">
      <div class="frm-news">
      <form name="formadd" action="bloginsert.php" method="post" enctype="multipart/form-data">
        <label for="addNewsForm"><h3>เพิ่มสาระน่ารู้ </h3></label>&nbsp;
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><br>หัวข้อสาระน่ารู้</td>
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
</head>
