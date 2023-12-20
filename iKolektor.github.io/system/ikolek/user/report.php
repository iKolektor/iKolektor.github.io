<?php 
include('report_info.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Schedule - Admin iKolek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"> </script>
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<nav class="navbar rounded border-bottom border-success border-5">
        <div class="container-fluid d-flex">
            <a class="navbar-brand justify-content-end" href="#">
                <img class="img-fluid" src="logo.png" alt="logo" width="180" height="50">
            </a>
                <button class="navbar-toggler border border-0 justify-content-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <a href="homepage.php" class="btn-group p-1 nav-link">
                        <h6>Home <i class="bi bi-house-door-fill"></i></h6>
                    </a>
                </button>
            </div>
        </div>
    </nav>
<body>
    <div class="container-fluid card col-10 pb-1 my-5 mb-5 pt-3">
        <div class="card-header bg-light bg-gradient"> <h4> Send report or Suggestions</h4></div>
        <div class="card-body">
            <p> Send feedback to techincal support to report a bug, problem, or make a suggestion for improvement</p>
            <div class="form-float">
                <form action="report_info.php" method="post">
                    <div class="mb-3 col-10">
                        <label for="email"><b>E-mail address (optional):</b></label>
                        <input class="form-control" type="text" name="email" id=email placeholder="@gmail.com">
                    </div>
                    <div class="mb-3 col-10">
                        <label for="subject"><b> Subject: </b></label>
                        <input class="form-control" type="text" name="subject" id=subject placeholder="Sample: Idea for improvement">
                    </div>
                    <div class="mb-3 col-10">
                        <label for="feedback"><b>Feeback:</b></label>
                        <textarea class="form-control" type="text" rows="8" cols="50" name="feedback" id=feedback placeholder="Write something..."></textarea>
                    </div>
                    <button class="btn btn-success rounded-pill" style="width:130px" type="submit" name="add_report" id="add_report" > Submit </button>
                </form>
            </div>
        </div>
    </div>
    
</body>
<footer class="text-center border-top border-dark border-5">
    <div class="text-center p-3 bg-success bg-gradient" style="color: white;">
        © 2023 Copyright:
        <a class="text-body text-light" href="https://ikolek.com/">ikolek.com</a>
    </div>
</footer>
</html>
