<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:880px;
    width:200px;
    float:left;
    padding:5px;
}
#section {
    width:1000px;
    float:left;
    padding:10px;
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:10px;
    position: relative;
    top: 2px;
}
</style>
<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('start','end','title').value == "")
    {
        alert('กรุณากรอกข้อมูลให้ครบถ้วนอีกครั้ง');
        return false;
    }
}
</script>
</head>
<body>
<?php include ("header_logout.php"); ?>
<?php include ("configDb.php"); ?>
  <div id="nav">
    <?php include("menu_admin.php"); ?>
  </div>

  <div id="section">
    <?php include("indexTest.php") ?>
      <form action="insertCalendar.php" method="POST" enctype ="multipart/form-data" onSubmit="JavaScript:return fncSubmit();" >
      วันที่เริ่มกิจกรรม :
      <input name="start" type="text" id="start" placeholder="yyyy-mm-dd">
      วันที่สิ้นสุดกิจกรรม :
      <input name="end" type="text" id="end" placeholder="yyyy-mm-dd">
      <br>
      <br>
      หัวข้อกิจกรรม :
      <input name="title" type="text" id="title" placeholder="หัวร้องกิจกรรม" maxlength="100" style="width:468px;">
      <input type="submit" name="Submit" value="เพิ่มข้อมูลกิจกรรม">
      </form>
      <br></br>
      <div style="color:red">
      * หมายเหตุ : ต้องระบุข้อมูลวันที่เริ่มกิจกรรม วันที่สิ้นสุดกิจกรรมและหัวข้อกิขกรรมให้ครบ
      <br>เช่น วันที่เริ่มกิจกรรม :2016-01-01 , วันที่สิ้นสุดกิจกรรม : 2016-01-05 , หัวข้อกิจกรรม : กิจกรรมช่วยกันปลูกป่า
      </div>
      </div>

      <div id="footer">
      Copyright © Basic Science Informationsystem
    </div>
</body>
</html>
