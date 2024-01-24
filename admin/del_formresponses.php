<?php 
  session_start();
     
  $staff=$_SESSION['staff'];
  $admin=$_SESSION['admin'];
  if ($admin||$staff==true) {
  
  }
  else{
    header("location:form_responses.php");
  }
include "connect.php";

$No = $_GET["no"];

$sql = "DELETE FROM  `form_response` WHERE`No` = $No";

mysqli_query($conn, $sql);

if($conn){
    header("location:form_responses.php");
}
mysqli_close($conn);
?>