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
  p.sarabun{
     font-family: "THSarabunNew", sans-serif;
  }
  .frm-news{ /*class with dot*/
    width: 1000px;
    height: auto;

    margin: 20px auto 10px auto; /*up right down left (in order)*/
    padding: 30px;
    border: 2px solid #999999;
  }
  .insert-picture-box{
    width: 150px;
    height: 150px;
    background-color: #fff;

  }
  .pictures{
    width: 120px;
    height: 120px;
    background-color: #fff
    margin: 20px auto 10px auto;
  }
  .txt{
    width: 850px;
    height: auto;
    margin: 20px auto 10px auto; /*up right down left (in order)*/
    padding: 30px;
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
  &nbsp;
<div class="frm-news">
<form name="formdisplay" enctype="multipart/form-data">

  <label for="displayForm">	<label for="topicForm" name="topic" id="topic"><h2><B><?php echo $topic?></h2></label><br><br></label>
  <table width="50%" border="0" cellspacing="8" cellpadding="8">
     <tr>

     <div>
       <center><img src='myfile/<?php echo $picture ?>' width="500" height="450" ></center>
  </div>

      <td colspan="8"><div align="center">

          <input name="hiddenField" type="hidden" value="add_n">

        </div></td>
    </tr>

<tr>
    <td>
      <br>
      <div class="txt">
    	<label  name="detail" id="detail"><?php echo $detail?></label>
    </div>
      </td>
    </tr>
    </table>
  </form>
  </div>
</body>
</html>
