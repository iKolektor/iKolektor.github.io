<?php
include('driver_info.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - iKolek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>

.navi ul {
  padding-left: 0;
}
</style>
<body>
    <div class="cont">
        <div class="navi">
            <ul>
                <li>
                    <a href="dashboard.php" class="justify-content-center p-2">
                        <span class="title"> <img class="img-fluid border border-5 border-light rounded-circle" src="logo_admin.png" alt="" width="100px" height="80px"></span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class = "icon"> <ion-icon name="home"></ion-icon> </span>
                        <span class="title"> Dashboard </span></span>
                    </a>
                </li>
                <li>
                    <a href="announcement.php">
                        <span class = "icon"> <ion-icon name="notifications"></ion-icon> </span>                     
                        <span class="title"> Announcement </span></span>
                    </a>
                </li>
                <li>
                    <a href="trucks.php">
                        <span class = "icon"> <ion-icon name="car"></ion-icon> </span>
                        <span class="title"> Garbage Truck & Routes </span></span>
                    </a>
                </li>
                <li>
                    <a href="report.php">
                        <span class = "icon"> <ion-icon name="folder"></ion-icon></span>
                        <span class="title"> Reports </span></span>
                    </a>
                </li>
                <li>
                    <a href="track.php">
                        <span class = "icon"> <ion-icon name="location"></ion-icon></span>
                        <span class="title"> Track Driver </span></span>
                    </a>
                </li>
                <li>
                    <a href="log_in.php">
                        <span class = "icon"> <ion-icon name="power"></ion-icon></span>
                        <span class="title"> Log Out </span></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="main">
        <div class="topbar">
            <div class="toggle">
            <ion-icon name="menu"></ion-icon>            
            </div>
        </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
</body>
</html>