<!doctype html>
<html lang="en">
    <head>
    <title>Shree Academy|A Perfect Place To Learn. </title>
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
    <body class="bg-warning">
   
        <main>
        <div class="container pt-3">
        <a href="logout.php"><button type="button" class="btn btn-danger my-3">Logout</button></a>
          <div class="text-center">
         <a href="add_staff.html"><button type="button" class="btn btn-primary my-3">Add Staff</button></a>
         <a href="studentsmanagement.php"><button type="button" class="btn btn-primary my-3">Student Dashboard</button></a>
         <a href="add_student.html"><button type="button" class="btn btn-primary my-3">Add Student</button></a>
         <a href="form_responses.php"><button type="button" class="btn btn-primary my-3">Form Responses</button></a>
          </div>  
         </div>
<div class="container-fluid px-2">
<div class="row ">

    <?php 
      
      session_start();
     
      $admin=$_SESSION['admin'];
 
      if ($admin==true) {
      
      }
      else{
        header("location:admin_login.html");
      }


    include "connect.php";
    $query = "SELECT * FROM `staff` ORDER BY `id` DESC;" ;

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0) {
        echo "<div class='container'>
        <div class='row justify-content-center align-items-center g-1'>";
        while ($rows = mysqli_fetch_array($result)) {
           echo "
           <div class='card col-md-6 col-lg-4 col-xl-3 m-3 p-2' style='max-width: 18rem;'>
           <div class='card-body'>
               <h4 class='card-title fw-bolder text-uppercase'>{$rows['first_name']}</h4>
               <h4 class='card-title fw-bolder text-uppercase'>{$rows['sur_name']}</h4>
               <p class='card-text fw-bold'>ID :- {$rows['id']}</p>
               <p class='card-text fw-bold'>Gender :- {$rows['gender']}</p>
               <p class='card-text fw-bold'>Date of Birth :- {$rows['birthdate']}</p>
               <p class='card-text fw-bold'>Contact :- {$rows['phone']}</p>
               <p class='card-text fw-bold'>Email :- {$rows['Email']}</p>
               <p class='card-text fw-bold'>Password :- {$rows['password']}</p>
               <p class='card-text fw-bold'>Address :- {$rows['address']}</p>
               <a name='' id='' class='btn btn-warning mx-1' href='edit_staff.php?id={$rows['id']}' role='button'>edit</a>
   
               <a name='' id='' class='btn btn-danger mx-1' href='del_staff.php?id={$rows['id']}' role='button'>delete</a>
              
           </div>
       </div>
       
        ";
        }
        echo "
        </div>
    </div>";
    } else {
        echo "no records found......";
    }
    
    ?>






</div>







</div>




        </main>
    
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
    body {
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    min-height: 100vh;
}
</style>
    </body>
</html>
