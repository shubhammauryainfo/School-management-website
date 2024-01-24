<?php 
  session_start();
     
  $staff=$_SESSION['staff'];
  $admin=$_SESSION['admin'];
  if ($admin||$staff==true) {
  
  }
  else{
    header("location:login.html");
  }
include("connect.php");


$name = $_POST["name"];
$lname=$_POST["lastname"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$gender = $_POST["gender"];
$class = $_POST["class"];
$dob = $_POST["dob"];
$Email=$_POST["email"];
$address = $_POST["address"];
$contact = $_POST["phone"];
$image = $_FILES['image']['name'];

$target_dir = "image/";
$target_file = $target_dir.$image;
move_uploaded_file($_FILES['image']['tmp_name'],"$target_file");


$sql = "INSERT INTO `student`(`id`,`name`, `surname`, `father_name`, `mother_name`, `gender`, `d_o_b`, `image`, `Email`, `address`, `class`, `phone`) VALUES (NULL,'$name','$lname','$fname','$mname','$gender','$dob','$target_file','$Email','$address','$class','$contact')";

    if (mysqli_query($conn, $sql)) {
        header("location:studentsmanagement.php");

        } 
        else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);


?>
