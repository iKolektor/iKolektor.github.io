<?php

include('schedule_info.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title> Schedule - Admin iKolek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></scrip>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"> </script>
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar rounded border-bottom border-success border-5">
        <div class="container-fluid d-flex">
            <a class="navbar-brand justify-content-end" href="#">
                <img class="img-fluid" src="logo.png" alt="logo" width="180" height="50">
            </a>
                <button class="navbar-toggler border border-0 justify-content-start" type="button">
                    <a href="homepage.php" class="btn-group p-1 nav-link">
                        <h6><b>Home  </b><i class="bi bi-house-door-fill"></i></h6>
                    </a>
                </button>
            </div>
        </div>
    </nav>
    <script>
          $(document).ready(function(){
              
              $('#truck_table').DataTable({
                responsive: true
              });


          });
    </script>
    <div class="container">
            <h1 class="text-center pt-5"> Garbage Collection Schedule </h1>
            <div class="row">
                <div class="col m-auto">
                    <div style="overflow-x: auto;">
                        <table class="table table-success table-striped table-hover" id="truck_table">
                            <thead>
                            <tr class="table-dark text-center" style="font-weight: bold; font-size: 11.5px;">
                                <th> Truck Name </th>
                                <th> Day of the Week</th>
                                <th> Route</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <?php
                                    insertTable($conn)
                                    ?>
                            </tbody>                                                         
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

<footer class="text-center position-relative border-top border-dark border-5">
    <div class="text-center p-3 bg-success bg-gradient" style="color: white;">
        © 2023 Copyright:
        <a class="text-body text-light" href="https://ikolek.com/">ikolek.com</a>
    </div>
</footer>
</html>