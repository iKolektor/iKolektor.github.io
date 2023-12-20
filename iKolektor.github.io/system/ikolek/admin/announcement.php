<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Announcement - iKolek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style>

.navi ul {
  padding-left: 0;
}

.sched {
  position: relative;
  width: 100%;
  padding: 20px;
  grid-gap: 30px;
  margin-top: 10px;
}

</style>
<body>
<div class="cont">
        <div class="navi">
            <ul>
                <li>
                    <a href="dashboard.php" class="justify-content-center p-2">
                        <span class="title"> <img class="img-fluid border border-5 border-light rounded-circle " src="logo_admin.png" alt="" width="100" height="90vh"></span>
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
                <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
                ?>
                    <div class="alert alert-warning alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> <?php echo $_SESSION['status']; ?>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                <div class="container mt-9" id="space">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-head">
                                <h1 style="text-align: center;"> ANNOUNCEMENT </h1>
                            </div>
                        <div class="sched" id="no-more-tables" style="overflow-x: auto;">
                        <table class="table table-striped table-hover table-bordered table-responsive" id="table">
                            <thead class="table-dark">  
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Announcement Entry</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <script>
                            $(document).ready(function() {

                                $('.delete-btn').click(function (e) { 
                                    e.preventDefault();

                                    var anno_id = $(this).closest('tr').find('.ann_id').text();
                                    
                                    $('#delete_id').val(anno_id);
                                    $('#confirm-delete').modal('show');
                                    
                                }); 
                            });

                        </script>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "ikolek_db");

                            $sql = "SELECT * FROM announcement";
                            $query = mysqli_query($conn, $sql);

                            if(mysqli_num_rows($query) > 0)
                            {
                                while($row = mysqli_fetch_array($query))
                                { echo "
                                <tr>
                                    <td class='ann_id'>".$row['announcement_id']. "</td>
                                    <td>".$row['subject']."</td>
                                    <td>".$row['ann_entry']."</td>
                                    <td>".$row['announcement_date']."</td>
                                    <td> 
                                        <a href='delete.php?id=".$row['announcement_id']."' class='btn btn-danger delete-btn'> DELETE</a>
                                    </td>
                                </tr>";     
                                }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=8>
                                <button type="button" class="btn btn-success d-flex ms-auto" data-bs-toggle="modal" data-bs-target="#add_announcement"> + Add </button>
                                </td>
                            </tr>
                        </tfoot>
                        </table>
                        </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <div class="modal fade" id="add_announcement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title d-flex-reverse"> Add Announcement</h4>
            </div>
            <form action="ann_entry.php" method="post">
                <div class="modal-body">
                    <div class="p-2 form-inline">
                        <?php
                        echo "Date :  <b>" . date("Y/m/d") . "</b><br>";
                        ?>
                    </div>
                    <div class="p-2 form-float">
                        <label for="subject_ann" name="subject_ann"> Notification Subject : </label>
                        <input type="text" name="subject_ann" id ="subject_ann">
                    </div>
                    <div class="form-group">
                        <label for="announcement_entry" class="p-2"> Announcement Content: </label>
                        <textarea type="text" class="form-control" name="announcement_entry" placeholder="Enter Your announcement here..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name ="add_entry"class="btn btn-success">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        </div>
        <form action='ann_entry.php' method='POST'>
        <div class="modal-body">
            <input type="hidden" name="deleter" id="delete_id">
            <strong> Delete this record? </strong>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="delete_announcement" class="btn btn-danger">Confirm</button>
        </div>
        </form>
        </div>
    </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
</html>