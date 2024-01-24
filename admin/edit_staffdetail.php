<?php 
 session_start();
     
 $admin=$_SESSION['admin'];

 if ($admin==true) {
 
 }
 else{
   header("location:admin_login.html");
 }
include "connect.php";

$id = $_POST["id"];
$name = $_POST["name"];
$lname=$_POST["lastname"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$Email=$_POST["email"];
$address = $_POST["address"];
$contact = $_POST["phone"];
$pass =$_POST["password"];

$sql ="UPDATE `staff` SET `first_name`='$name',`sur_name`='$lname',`gender`='$gender',`phone`='$contact',`Email`='$Email',`password`='$pass',`birthdate`='$dob',`address`='$address' WHERE `id`='$id'";

mysqli_query($conn,$sql);

if ($conn) {
    header("location:staffmanagement.php");
}
else {
    echo "update failed....".mysqli_error($conn);
}
?>