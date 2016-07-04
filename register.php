<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php include ("configDb.php"); ?>
<style type="text/css">
	.frm-login{
		width: 700px;
		background: white;
		margin: 20px 20px 10px 20px;
		padding: 30px;
		border: 5px solid black;

	}
	.logo{
		width: 150px;
		height: 150px;
		margin: 10px auto;
	}
</style>
<div class="frm-login">
<form action="insertMember.php" method="POST">
<div class="logo">
		<img src="img/xbox.png" width="150" height="150">
</div>
<form>
 <div class="form-group">
    <label for="exampleInputName">ชื่อ</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="Firstname" name="Firstname">
  </div>
  <div class="form-group">
    <label for="exampleInputLastname">นามสกุล</label>
    <input type="text" class="form-control" id="exampleInputLastname" placeholder="Lastname" name="Lastname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
