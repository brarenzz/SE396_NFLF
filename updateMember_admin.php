<?php session_start();
include ("configDb.php");
$MemberID = $_POST['ID'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Subject = $_POST['Subject'];
$OfficeRoom = $_POST['OfficeRoom'];
$Appointment = $_POST['Appointment'];
$Education = $_POST['Educationbackground'];
$TelNumber = $_POST['TelNumber'];
$Status = $_POST['Status'];
$Email = $_POST['Email'];
//$Password = $_POST['Password'];
$Picture = $_FILES['Picture']['name'];

$namepic = $_FILES['Picture']['name'];
move_uploaded_file($_FILES["Picture"]["tmp_name"],"imgMember/".$_FILES["Picture"]["name"]);

if($Picture ==''){
$sql = " UPDATE member SET Firstname = '$Firstname',Lastname = '$Lastname',Subject = '$Subject',OfficeRoom = '$OfficeRoom',Appointment = '$Appointment',Educationbackground = '$Education',TelNumber = '$TelNumber',Status = '$Status',Email = '$Email' WHERE ID = $MemberID" ;
}else{
$sql = " UPDATE member SET Firstname = '$Firstname',Lastname = '$Lastname',Subject = '$Subject',OfficeRoom = '$OfficeRoom',Appointment = '$Appointment',Educationbackground = '$Education',TelNumber = '$TelNumber',Status = '$Status',Email = '$Email',Picture = '$Picture' WHERE ID = $MemberID" ;
}
$result = mysqli_query($conn, $sql);
      if($result){
            echo " <meta http-equiv='refresh'content='1;URL=listMember_admin.php'>";
          }
?>
