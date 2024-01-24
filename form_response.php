<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "user");

// Check connection
if (!$conn) {
 echo"failed ".mysqli_connect_error($conn);
}

$name = $_POST["name"];
$Email=$_POST["email"];
$subject=$_POST["subject"];
$message = $_POST["message"];




$sql = "INSERT INTO `form_response`(`name`, `Email`, `subject`, `message`) VALUES ('$name','$Email','$subject','$message')";

    if (mysqli_query($conn, $sql)) {
        header("location:thankyou.html");

        } 
        else {

        echo "try again".mysqli_error($conn);
    }

    mysqli_close($conn);


?>
