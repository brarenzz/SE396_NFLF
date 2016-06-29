<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php include ("header_logout.php"); ?>
<?php include ("configDb.php"); ?>
<style type="text/css">
	#content{
	width: auto;;
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
