<!doctype html>
<html lang="en">
    <head>
        <title>Shree Academy|A Perfect Place To Learn. </title>
      
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
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
$query = "SELECT * FROM `staff` where `id` = '$id'";

$result = mysqli_query($conn,$query);

$rows = mysqli_fetch_array($result);

?>

        <div class="text-center mt-4"> <a href="staffmanagement.php"><button type="button" class="btn btn-success">Dashboard</button></div></a>
    <div class="wrapper mt-3 rounded bg-white">
        <div class="h3 text-center">Staff Edit Form</div>
        <hr class="border  w-23 mx-auto border-warning border-2 opacity-75 ">

<form action="edit_staffdetail.php" method="post" enctype="multipart/form-data">
    <div class="form">
        <div class="row">
        <input
                            type="hidden"
                            class="form-control"
                            name="id"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo"{$rows['id']}"; ?>"
                        />
            <div class="col-md-6 mt-md-0 mt-3">
                <label>First Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo"{$rows['first_name']}"; ?>"  required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo"{$rows['sur_name']}"; ?>"  required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>phone</label>
                <input type="tel" class="form-control" name="phone" value="<?php echo"{$rows['phone']}"; ?>"  required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo"{$rows['address']}"; ?>"  required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Birthday</label>
                <input type="date" class="form-control" name="dob" value="<?php echo"{$rows['birthdate']}"; ?>"  required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Gender</label>
                <input type="text" class="form-control" name="gender" value="<?php echo"{$rows['gender']}"; ?>" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo"{$rows['Email']}"; ?>"  required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo"{$rows['password']}"; ?>"  required>
            </div>
        </div>
        
        <button class="btn btn-primary mt-3" type="submit">Save</button>
    </form>
    </div>


    </div>

        <style>
           @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    min-height: 100vh;
}

body::-webkit-scrollbar {
    display: none;
}

.wrapper {
    max-width: 800px;
    margin: 80px auto;
    padding: 30px 45px;
    box-shadow: 5px 25px 35px #3535356b;
}

.wrapper label {
    display: block;
    padding-bottom: 0.2rem;
}

.wrapper .form .row {
    padding: 0.6rem 0;
}

.wrapper .form .row .form-control {
    box-shadow: none;
}

.wrapper .form .option {
    position: relative;
    padding-left: 20px;
    cursor: pointer;
}


.wrapper .form .option input {
    opacity: 0;
}

.wrapper .form .checkmark {
    position: absolute;
    top: 1px;
    left: 0;
    height: 20px;
    width: 20px;
    border: 1px solid #bbb;
    border-radius: 50%;
}

.wrapper .form .option input:checked~.checkmark:after {
    display: block;
}

.wrapper .form .option:hover .checkmark {
    background: #f3f3f3;
}

.wrapper .form .option .checkmark:after {
    content: "";
    width: 10px;
    height: 10px;
    display: block;
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    position: absolute;
    top: 50%;
    left: 50%;
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 300ms ease-in-out 0s;
}

.wrapper .form .option input[type="radio"]:checked~.checkmark {
    background: #fff;
    transition: 300ms ease-in-out 0s;
}

.wrapper .form .option input[type="radio"]:checked~.checkmark:after {
    transform: translate(-50%, -50%) scale(1);
}

#sub {
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    color: #333;
}

#sub:focus {
    outline: none;
}

@media(max-width: 768.5px) {
    .wrapper {
        margin: 30px;
    }

    .wrapper .form .row {
        padding: 0;
    }
}

@media(max-width: 400px) {
    .wrapper {
        padding: 25px;
        margin: 20px;
    }
} 
        </style>
    </body>
</html>
