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

$id = $_POST["id"];
$name = $_POST["name"];
$lname=$_POST["lastname"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$gender = $_POST["gender"];
$class = $_POST["class"];
$dob = $_POST["dob"];
$fees=$_POST["fees"];
$Email = $_POST["email"];
$address = $_POST["address"];
$contact = $_POST["phone"];

$sql =" UPDATE `student` SET  `name`='$name',`surname`='$lname',`father_name`='$fname',`mother_name`='$mname',`gender`='$gender',`fees`='$fees',`d_o_b`='$dob',`Email`='$Email',`address`='$address',`class`='$class',`phone`='$contact' WHERE `id` = '$id'";

mysqli_query($conn,$sql);

if ($conn) {
    header("location:studentsmanagement.php");
}
else {
    echo "update failed....".mysqli_error($conn);
}
?>