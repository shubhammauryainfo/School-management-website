<?php
 error_reporting(0);
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
            $query = "SELECT * FROM `student` where `id` = '$id'" ;

            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_array($result);
          
            ?>


<!doctype html>
<html lang="en">
  <head>
    <title>Student Dashboard</title>
    <!-- Required meta tags -->
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
    <div class="container">
      <a href="studentsmanagement.php"><button type="button" class="btn btn-success my-1">Dashboard</button></a>
      <h1 class="text-center fw-bolder">Hey <?php echo "{$rows['name']}" ?> !</h1>
      <div class="main-body">
      
        
            <!-- /Breadcrumb -->
      
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="<?php echo "{$rows['image']}" ?>" alt="Admin" class="rounded-circle" width="150" style="border: 6px solid #46914d;">
                      <div class="mt-3">
                        <h4><?php echo "{$rows['name']}" ?></h4>
                        <p class="text-muted mb-1 fw-bold">ID : </p><p> <?php echo "{$rows['id']}" ?> </p>
                        <p class="text-muted mb-1 fw-bold">Class : </p><p> <?php echo "{$rows['class']}" ?> </p>
                        <p class="text-muted font-size-sm fw-bold">Date of birth : </p><p> <?php echo "{$rows['d_o_b']}" ?> </p>
            
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">Full Name</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <h6 class="fw-bold text-uppercase"><?php echo "{$rows['name']}" ?> <?php echo "{$rows['surname']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">Father Name</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <h6 class="fw-bold text-uppercase"><?php echo "{$rows['father_name']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">Mother Name</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <h6 class="fw-bold text-uppercase"><?php echo "{$rows['mother_name']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">Gender</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <h6 class="fw-bold text-uppercase"><?php echo "{$rows['gender']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">Email</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <h6 class="fw-bold text-uppercase"><?php echo "{$rows['Email']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">Phone No.</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <h6 class="fw-bold text-uppercase"><?php echo "{$rows['phone']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">Total Fees</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <h6 class="fw-bold text-uppercase"><?php echo "{$rows['total_fees']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">pending Fees</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <h6 class="fw-bold text-uppercase"><?php echo "{$rows['fees']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h5 class="mb-0">Address</h5>
                      </div>
                      <div class="col-sm-9 text-secondary">
                   <h6 class="fw-bold text-uppercase"><?php echo "{$rows['address']}" ?></h6>
                      </div>
                    </div>
                    <hr>
                   
                  </div>
                </div>
  
              </div>
            </div>
  
          </div>
      </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <style>
      body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    min-height: 100vh;   
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
    </style>
  </body>
</html>
