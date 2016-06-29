<?php
session_start();
include ("configDb.php");
session_destroy();
echo "Exit Complete";
echo " <meta http-equiv='refresh'content='1;URL=login.php'>";
?>
