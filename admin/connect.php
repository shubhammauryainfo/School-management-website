<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "user");

// Check connection
if (!$conn) {
 echo"failed ".mysqli_connect_error($conn);
}

?>