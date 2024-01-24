<!doctype html>
<html lang="en">
    <head>
        <title>form Response</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            rel="stylesheet"
            
        />
        
    </head>

    <body>
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
      echo"  <div class='container rounded mt-3 bg-white p-md-5'>
            <div class='h2 font-weight-bold'>Form Responses</div>
            <a href='studentsmanagement.php'><button type='button' class='btn btn-success my-1'>Dashboard</button></a>
            ";
           include "connect.php";
           $query = "SELECT * FROM `form_response` ORDER BY `No` DESC;" ;
       
           $result = mysqli_query($conn,$query);
           if(mysqli_num_rows($result)>0) {
            echo "
            <div class='table-responsive'>
                <table class='table'>
                   
                    <thead>
                        <tr>
                            <th scope='col'>Name</th>
                            <th scope='col'>Email</th>
                            <th scope='col'>Subject</th>
                            <th scope='col'>Message</th>
                        </tr>
                    </thead>
                    <tbody>";
                        while ($rows = mysqli_fetch_array($result)) {
                            echo "
                        <tr id='spacing-row'>
                            <td></td>
                        </tr>
                        <tr class='bg-blue'>
                            <td class='pt-2'>
                                <div class='pl-lg-5 pl-md-3 pl-1 name'>{$rows['name']}</div>
                            </td>
                            <td class='pt-3'>{$rows['Email']}</td>
                            <td class='pt-3'>{$rows['subject']}</td>
                            <td class='pt-3'>{$rows['message']}</td>
                            <td class='pt-3'> <a class='btn btn-danger mx-1' href='del_formresponses.php?no={$rows['No']}' role='button'>delete</a></td>
                        </tr>
                    
                
                    </tbody>
                    ";
                        }
                        echo"
                </table>
            </div>";
                    }
                    else{
                        echo "no records found......"; 
                    }
                    ?>
        </div>


        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
           
        ></script>

        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
           
        ></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&family=Poppins:wght@600&display=swap');

* {
    box-sizing: border-box
}

body {
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    font-family: 'Poppins', sans-serif;
    color: #666
}

.h2 {
    color: #444;
    font-family: 'PT Sans', sans-serif
}

thead {
    font-family: 'Poppins', sans-serif;
    font-weight: bolder;
    font-size: 20px;
    color: #666
}

img {
    width: 40px;
    height: 40px
}

.name {
    display: inline-block
}

.bg-blue {
    background-color: #EBF5FB;
    border-radius: 8px
}

.fa-check,
.fa-minus {
    color: blue
}

.bg-blue:hover {
    background-color: #3e64ff;
    color: #eee;
    cursor: pointer
}

.bg-blue:hover .fa-check,
.bg-blue:hover .fa-minus {
    background-color: #3e64ff;
    color: #eee
}

.table thead th,
.table td {
    border: none
}

.table tbody td:first-child {
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px
}

.table tbody td:last-child {
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px
}

#spacing-row {
    height: 10px
}

@media(max-width:575px) {
    .container {
        width: 125%;
        padding: 20px 10px
    }
}
        </style>
    </body>
</html>
