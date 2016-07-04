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

  $equipID =$_GET['equipID']; ?>

<?php
    $sqlSelect = "SELECT * FROM equip WHERE equipID = '$equipID'" ;
    $result = mysqli_query($conn,$sqlSelect);
    $row = mysqli_fetch_array($result);
        $equippic = $row['equippic'];
        ?>

<div class="frm-lab">
<form name="formlab" action="updateequip.php?equipID=<?=$equipID?>" method="post" enctype="multipart/form-data">
  <label for="addNewsForm" >แก้ไขรูปภาพ</label>&nbsp;
  <table width="80%" border="0" cellspacing="8" cellpadding="9">
    <tr>
      <td>รูปภาพ</td>
    <tr>
    <td>
    <div class="picture">
  <img src='equip/<?php echo $equippic ?>' width="120" height="120">

  </div>
  </td>
      <td colspan="2"><div align="center">
          <input name="hiddenField" type="hidden" value="add_n">
        </div></td>
    </tr>
    </table>
    <input type="file" name="equippic" id="equippic">
    <input type="submit" value="submit" name="submit" id="submit">
</form>
  </div>

</body>
</html>
