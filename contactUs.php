<html>

<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <meta charset="utf-8">

</head>
  <body>
    <?php include "header.php" ?>
    <style type="text/css">
		.frm-contact{
      width: 60%;
      height: auto;
			margin: 40px auto; 20px auto;
		  }
	   </style>
    <div class="frm-contact">
    <form method="POST" action="configContact.php">
          <h3>ติดต่อเรา / ข้อเสนอแนะ</h3><br>
          หากท่านมีเรื่องสอบถามหรือต้องการติดต่อเราและต้องการให้ทางเราติดต่อกลับ<br>
          โปรดฝากข้อความของท่านผ่านช่องทางด้านล่างนี้<br><br>
          <h4>ส่งข้อความถึงเรา</h4><br>
          <input type="text" name="name" size="19" placeholder="ชื่อ" style="width:50%"><br>
          <br>
          <input type="email" name="email" size="19" placeholder="จดหมายอิเล็กทรอนิกส์ติดต่อ" style="width:50%"><br>
          <br>
          <textarea rows="9" name="message" cols="30" style="width:50%"> </textarea><br>
          <br>
          <input type="submit" value="Submit" name="submit" class="btn btn-success" placeholder="ข้อความของท่าน">
      </form>
      </div>
    </body>
</html>
