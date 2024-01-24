<?php 
 session_start();
     
 $admin=$_SESSION['admin'];

 if ($admin==true) {
 
 }
 else{
   header("location:admin_login.html");
 }

include "connect.php";

$id = $_GET["id"];

$sql = "DELETE FROM  `staff` WHERE`id` = $id";

mysqli_query($conn, $sql);

if($conn){
    header("location:staffmanagement.php");
}
mysqli_close($conn);
?>