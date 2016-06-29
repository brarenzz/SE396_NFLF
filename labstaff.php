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
  <style>
   #content{
  width: 70%;
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
   <td width="20%"><div align="center">
    <div id = "content">

	<!-- Menu -->
	<?php include("menu_labstaff.php"); ?>

	</div></td>
    <td width="100%">
    	<!-- Container -->
	<?php
	switch ($_GET["page"]) {
	case "home":
		echo "Home";
		include("page_home.php");
		break;
	case "service":
		echo "Home -> Service";
		include("page_service.php");
		break;
	case "product":
		echo "Home -> Product";
		include("page_product.php");
		break;
	case "aboutus":
		echo "Home -> About Us";
		include("page_aboutus.php");
		break;
	case "contactus":
		echo "Home -> Contact Us";
		include("page_contactus.php");
		break;
	default:
		echo "Home";
		include("page_home.php");
	}
	?>
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
