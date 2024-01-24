<?php 
  session_start();
     
  $staff=$_SESSION['staff'];
  $admin=$_SESSION['admin'];
  if ($admin||$staff==true) {
  
  }
  else{
    header("location:login.html");
  }
include "connect.php";

$id = $_GET["id"];

$sql = "DELETE FROM  `student` WHERE`id` = $id";

mysqli_query($conn, $sql);

if($conn){
    header("location:studentsmanagement.php");
}
mysqli_close($conn);
?>