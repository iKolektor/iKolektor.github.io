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
                        <span class="title"> <img class="img-fluid border border-5 border-light rounded-circle" src="logo_admin.png" alt="" width="100" height="70vh"></span>
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

        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers"> 0</div>
                    <div class="cardName"> Notified Users</div>
                </div>
                <div class="iconbox"><ion-icon name="notifications"></ion-icon></div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"> 0</div>
                    <div class="cardName"> Total Trucks</div>
                </div>

                <div class="iconbox"> <ion-icon name="car"></ion-icon></div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"> 0 </div>
                    <div class="cardName"> Maintenance </div>
                </div>
                <div class="iconbox"> <ion-icon name="construct"></ion-icon></div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"> 0</div>
                    <div class="cardName"> Total Drivers</div>
                </div>
                <div class="iconbox"> <ion-icon name="people"></ion-icon></div>
            </div>      
        </div>
            <div class="details">
                <div class="drivers_table">
                    <div class="cardHeader">
                        <h2> Collectors on the Road </h2>
                        <a href="track.php" class="view-all"> View All </a>
                    </div>
                    <div>
                    <table class="table table-striped table-hover table-bordered table-responsive">
                            <thead>
                        <tr>
                            <th>Driver ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact Number </th>
                            <th>Truck Name</th>
                        </tr>
                    </thead>
                    <tr>
                            <tbody>
                            <?php
                                    $sql = "SELECT * FROM account";
                                    $query = mysqli_query($conn, $sql); 
                                    if(mysqli_num_rows($query) > 0)
                                {
                                    while($row = mysqli_fetch_array($query))
                                { echo "
                                        <tr>
                                            <td class='account_id'>".$row['account_id']. "</td>
                                            <td class='dri_fname'>".$row['driver_fname']."</td>
                                            <td class='dri_lname'>".$row['driver_lname']."</td>
                                            <td class='dri_info'>".$row['driver_coninfo']."</td>
                                            <td class='dri_truck'>".$row['driver_truck']."</td>
                                        </tr>";     
                                                }
                                
                                        }
                                ?>
                            </tbody>
                    </table>
                    </div>
                </div>
                <div class="recentNotified">
                    <div class="cardHeader">
                        <h2>Recently Notified User</h2>
                    </div>
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