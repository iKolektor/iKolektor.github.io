<?php
include ('trucks_info.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Trucks - Admin iKolek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"> </script>
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
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

.sched table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

.sched table thead td {
  font-weight: 600;
}

.sched .drivers_table table tr {
  color: black;
  border-bottom: 2px solid rgb(0, 0, 0, 0.08);
}

.sched .drivers_table table tr:last-child {
  border-bottom: none;
}

.sched .drivers_table table tr td {
  padding: 10px;
  text-align: center;
}

.sched .drivers_table table tbody tr:hover {
  background: #2e3136;
  color: white;
}

</style>
<body>
<div class="cont">
        <div class="navi">
            <ul>
                <li>
                    <a href="dashboard.php" class="justify-content-center pt-2">
                        <span class="title"> <img class="img-fluid border border-5 border-light rounded-circle" src="logo_admin.png" alt="" width="100" height="90vh"></span>
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
    <script>
          $(document).ready(function(){
              
              $('#truck_table').DataTable();

          });
    </script>
    
    <div class="main">
        <div class="topbar">
            <div class="toggle">
            <ion-icon name="menu"></ion-icon>            
            </div>
        </div>
      <div class="sched">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="cardHeader">
                                  <h1 style="text-align: center;"> Garbage Trucks and Routes </h1>
                              </div>
                              <br>
                      </div>
                      <div id="no-more-tables">
                      
                          <table class="table table-sm table-striped table-bordered table-responsive" style="overflow-x:auto;" id="truck_table">
                              <thead class="table-dark">
                                <div>
                                  <button type="button" class="btn btn-success d-flex ms-auto" data-bs-toggle="modal" data-bs-target="#add_account"> + Add Account </button>
                                </div>
                                <br> 
                                <div class="modal fade" id="add_account" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title d-flex-reverse"> New Entry + </h4>
                                            </div>
                                            <form action="truck_info.php" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="mb-2 text-muted" for="last_name"> Last Name : </label>
                                                    <input type="text" class="form-control" name="last_name" placeholder="Enter last name..."></input>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-2 text-muted" for="first_name"> First Name : </label>
                                                    <input type="text" class="form-control" name="first_name" placeholder="Enter first name..."></input>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" name ="add_account"class="btn btn-success">Submit</button>
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                  <tr>
                                      <th>ID</th>
                                      <th>Truck Name</th>
                                      <th>Day of the Week</th>
                                      <th> Route </th>
                                      <th>Route Link</th>
                                      <th> Action </th>
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
    </div>
</div>
<div class="modal fade" id="truck_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
      </div>
    <form action='trucks_info.php' method='POST'>
      <div class="modal-body">
        <input type="hidden" name="truck_id" id="truck_id">
        <strong> Delete this truck row? </strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="delete_truck" class="btn btn-danger">Confirm</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
        $(document).ready(function() {

            $('.delete-btn').click(function (e) { 
            e.preventDefault();

            var truck_id = $(this).closest('tr').find('.truck_id').text();
                                
            $('#truck_id').val(truck_id);
            $('#truck_modal').modal('show');
                                
        }); 
    });
</script>
<div class="modal fade" id="update_info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Driver Information</h5>
      </div>
      <div class="modal-body">
                      <form name="" action="trucks_info.php" method="post" autocomplete="off">
                                <input type="hidden" id="truck_number" name="truck_id" > </input>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="truck_name"> Truck Name : </label>
                                        <input type="text" id="truck_name" name="truck_name" class="form-control" placeholder="Truck Name" value="" required autofocus/>
                                </div>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted"for="day_of_the_week"> Day of the Week : </label>
                                        <input type="text" id="day_of_the_week" name="day_of_the_week" class="form-control" placeholder="Day of the Week" required/>
                                </div>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="route"> Route : </label>
                                        <input type="text" id="route"name="route" class="form-control" placeholder=" Route..." required/>
                                </div>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="route_link"> Route : </label>
                                        <input type="text" id="route_link"name="route_link" class="form-control" placeholder=" Route link..." required/>
                                </div>             
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" name="update_trucks" class="btn btn-success">Confirm</button>
                                </div>
                        </form>
    </div>
  </div>
</div>
<script>
        $(document).ready(function() {

            $('.update-btn').click(function (e) { 
            e.preventDefault();

            var truck_id = $(this).closest('tr').find('.truck_id').text();

            $.ajax({
              method: "POST",
              url: "trucks_info.php",
              data: {
                'update_btn': true,
                'truck_id':truck_id,
              },
              success: function (response) {
                $.each(response, function (key, value) {
                  
                  $('#truck_number').val(value['truck_id']);
                  $('#truck_name').val(value['truck_name']);
                  $('#day_of_the_week').val(value['day_of_the_week']);
                  $('#route').val(value['route']);
                  $('#route_link').val(value['route_link']);
                });
              }
            })

            $('#update_info').modal('show');
                                
        }); 
    });
</script>
</body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
</html>