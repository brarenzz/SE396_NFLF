<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php include ("header_index.php"); ?>
<?php include ("configDb.php"); ?>
	<style type="text/css">
		.frm-login{
			width: 500px;
			height: auto;
			background: #F2F2F2;
			margin: 20px 20px 20px 20px;
			padding: 30px;
			border: 1.5px solid #CCCCCC;
		}
	</style>
<div class="frm-login">
<form action="checklogin.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="Username" class="form-control" id="exampleInputUsername1" placeholder="username" name="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
  </div>

  <button type="submit" class="btn btn-success">Login</button>
</form>
</div>


</body>
</html>
