
<html>
  <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <meta charset="utf-8">
    <style type="text/css">
		.log-out{
      padding-top: 15px;
		  }
	   </style>
  </head>
  <body>
    <div>
      <img src="banner.jpg" alt="" class="frm-pic" style="width:100%; " />
    </div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid container">
        <ul class="nav navbar-nav">
          <li><a href="index.php">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> หน้าแรก </a></li>
          <li><a href="groupinfo.php"> เกี่ยวกับกลุ่มวิชา </a></li>
          <li><a href="show_member.php"> องค์กร </a></li>
          <li><a href="displaynews.php"> ข่าว/กิจกรรม </a></li>
          <li><a href=""> ห้องปฏิบัติการ </a></li>
          <li><a href=""> สาระน่ารู้ </a></li>
          <li><a href="contactUs.php"> ติดต่อเรา </a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
      <!--    <a href="login.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a> -->

        <div class="log-out">
            <li><font color="white"> user: <?php   echo $_SESSION["Username"];?> </font>|<a href ="logout.php"> logout </a></li>

        </div>
        </ul>
      </div>
    </nav>
  </body>
</html>
