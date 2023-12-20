<?php

include('notification.php');
?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title> Track Now - iKolek </title>

    </head>
    <nav class="navbar rounded border-bottom border-5 border-success">
            <div class="container-fluid">
                    <a class="navbar-brand" href="homepage.php">
                        <img class="img-fluid" src="logo.png" alt="logo" width="180" height="50">
                    </a>
                <div class="btn-group">
                    <button class="btn dropdown-toggler" type="button" data-bs-toggle="dropdown" data-bs-target="#myModal">
                        <i class="bi bi-bell" style="font-size: 1rem;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end text-decoration-none">
                        <li>
                                <?php
                                    notification_entry($conn)
                                ?>
                        </li>
                    </ul>
                    <button class="btn dropdown-toggler" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-list-ul" style="font-size: 1rem;"></i>
                    </button>
                        <div class="dropdown-menu dropdown-menu-end collapse navbar-collapse">
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item text-center" href="schedule.php"> <i class="bi bi-calendar2-day" style="font-size: 1.5rem;"></i> <b>Collection Schedule</b></a>
                                </li>
                                <li>
                                    <a class="dropdown-item bg-light text-center" href="report.php"> <i class="bi bi-flag" style="font-size: 1.5rem;"></i> <b>Send Report or Suggestions</b></a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-center" href="about_us.php"> <b><i class="bi bi-person-vcard" style="font-size: 1.5rem;"></i> </b><b>About Us</b></a>
                                </li>    
                            </ul>
                        </div>
                </div>
            </div>
        </nav>
    <body>
        <div class=" container-fluid border-end border-start border-5 border-success">
            <div class="container p-3 my-2 mt-5 col-md-8 col-lg-6 mb-5" >
                            <h4 class="text-center">Pumili ng ita-track : </h4>
                            <div class="row justify-content-center">
                            <form class="form-floating col-8">
                                <div class="mb-4 mt-5">
                                    <label for="truck_name" class="form-label border-bottom border-2 border-success"><b> Truck Name : </b></label>            
                                    <select class="form-select form-contol rounded-pill" id="truck_name" placeholder="truck_name">
                                            <option disabled selected> Pumili </option>
                                            <option>GT-34</option>
                                            <option>GT-35</option>
                                            <option>GT-36</option>
                                            <option>GT-37</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="week" class="form-label border-bottom border-2 border-success"><b> Day of the week : </b></label>                     
                                    <select class="form-select form-control rounded-pill" id="week" placeholder="Day of the week">
                                        <option disabled selected> Pumili </option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                        <option>Sunday</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success rounded-pill" style="width:130px"> i-Track Now! </button>
                                </div>
                            </form>
                            </div>
                        </div>
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    </body>
    <footer class="fixed-bottom pb-3 mt-0 bg-success text-center text-light">
        <div class="text-center p-3 bg-success bg-gradient border-top border-dark border-5" style="color: white;">
            © 2023 Copyright:
            <a class="text-body text-light" href="https://ikolek.com/">ikolek.com</a>
        </div>
    </footer>
</html>