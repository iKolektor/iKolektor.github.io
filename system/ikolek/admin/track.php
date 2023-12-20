<?php 
include('driver_info.php')
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Track Driver - iKolek</title>
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
        $(document).ready(function() {

            $('.update-btn').click(function (e) { 
            e.preventDefault();

            var account_id = $(this).closest('tr').find('.account_id').text();

            $.ajax({
              method: "POST",
              url: "driver_info.php",
              data: {
                'update_btn': true,
                'account_id':account_id,
              },
              success: function (response) {
                $.each(response, function (key, value) {
                  
                  $('#account_number').val(value['account_id']);
                  $('#driver_fname').val(value['driver_fname']);
                  $('#driver_lname').val(value['driver_lname']);
                  $('#driver_coninfo').val(value['driver_coninfo']);
                  $('#driver_truck').val(value['driver_truck']);
                });
              }
            })

            $('#update_info').modal('show');
                                
        }); 
    });
</script>
<script>
        $(document).ready(function() {

            $('.delete-btn').click(function (e) { 
            e.preventDefault();

            var account_id = $(this).closest('tr').find('.account_id').text();
                                
            $('#account_id').val(account_id);
            $('#account_confirm').modal('show');
                                
        }); 
    });
</script>
<div class="main">
        <div class="topbar navbar top-fixed">
            <div class="toggle">
            <ion-icon name="menu"></ion-icon>            
            </div>
        </div>

        <div class="sched" id="space">
                    <div class="card-head">
                        <h1 style="text-align: center;"> TRACK DRIVER </h1>
                        <br>
                        <div>
                                  <button type="button" class="btn btn-sm btn-success d-flex ms-auto" data-bs-toggle="modal" data-bs-target="#add_account"> + Add Account </button>
                                </div>
                                <br> 
                                <div class="modal fade" id="add_account" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title d-flex-reverse"> Add Account</h4>
                                            </div>
                                            <form action="driver_info.php" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="mb-2 text-muted" for="last_name"> Last Name : </label>
                                                    <input type="text" class="form-control" name="last_name"></input>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-2 text-muted" for="first_name"> First Name : </label>
                                                    <input type="text" class="form-control" name="first_name"></input>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-2 text-muted" for="contact_num"> Contact Number : </label>
                                                    <input type="text" class="form-control" name="contact_num"></input>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-2 text-muted" for="username"> Username : </label>
                                                    <input type="text" class="form-control" name="username"></input>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-2 text-muted" for="password"> Password : </label>
                                                    <input type="text" class="form-control" name="password"></input>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-2 text-muted" for="truck_name"> Truck Name : </label>
                                                    <input type="text" class="form-control" name="truck_name"></input>
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
                        <form class="d-flex mt-6">
                            <input class="form-control me-2" type="text" name="search" id="myInput" placeholder="Search" aria-label="Search">                  </form>
                    </div>
                    <br>
                <div id = "no-more-tables">
                <table class="table table-striped table-hover table-bordered table-responsive" style="overflow-x:auto;" id="driver_table">
                    <thead class="table-dark">
                        <tr>
                            <th>Driver ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact Number </th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Truck Name</th>
                            <th>Track</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tr>
                      <tbody id="myTable">
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
                                    <td class='dri_username'>".$row['username']."</td>
                                    <td class='dri_password'>".$row['password']."</td>
                                    <td class='dri_truck'>".$row['driver_truck']."</td>
                                    <td>
                                        <a href='' class ='btn btn-sm btn-success'> TRACK NOW </a>
                                    </td>
                                    <td> 
                                        <a href='driver_info.php?id=".$row['account_id']."' class='btn btn-sm btn-success update-btn'> UPDATE</a>
                                        <br>
                                        <a href='driver_info.php?id=".$row['account_id']."' class='btn btn-sm btn-danger delete-btn'> DELETE</a>
                                    </td>
                                        </tr>";     
                                        }
                        
                                }
                        ?>
                      </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#myInput").on("keyup",function(){
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);
      });
    });
  });
  </script>
<div class="modal fade" id="account_confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
      </div>
    <form action='driver_info.php' method='POST'>
      <div class="modal-body">
        <input type="hidden" name="account_id" id="account_id">
        <strong> Delete this account? </strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="delete_account" class="btn btn-danger">Confirm</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="update_info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Driver Information</h5>
      </div>
      <div class="modal-body">
                      <form name="" action="driver_info.php" method="post" autocomplete="off">
                                <input type="hidden" id="account_number" name="account_id" > </input>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="driver_fname"> First Name : </label>
                                        <input type="text" id="driver_fname" name="driver_fname" class="form-control" placeholder="First Name" value="" required autofocus/>
                                </div>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted"for="driver_lname"> Last Name : </label>
                                        <input type="text" id="driver_lname" name="driver_lname" class="form-control" placeholder="Last Name" required/>
                                </div>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="driver_coninfo"> Contact Number : </label>
                                        <input type="text" id="driver_coninfo"name="driver_coninfo" class="form-control" placeholder=" +63" maxlength="11" required/>
                                </div>
                                <div class="dropup mb-3 ">
                                        <label class="mb-2 text-muted" for="driver_truck"> Truck you Drive:  </label>
                                        <select class="form-select" id="driver_truck" name="driver_truck" required>
                                                <option value="none"> --Required--</option>
                                                <option value="GT-36"> GT-36</option>
                                                <option value="GT-37"> GT-37</option>
                                                <option value="GT-38"> GT-38</option>
                                                <option value="GT-39"> GT-39</option>
                                                <option value="GT-40"> GT-40</option>
                                                <option value="GT-41"> GT-41</option>
                                                <option value="GT-42"> GT-42</option>
                                                <option value="GT-43"> GT-43</option>
                                                <option value="GT-44"> GT-44</option>
                                                <option value="GT-45"> GT-45</option>
                                                <option value="GT-46"> GT-46</option>
                                                <option value="GT-47"> GT-47</option>
                                                <option value="GT-48"> GT-48</option>
                                        </select>
                                </div>               
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" name="update_account" class="btn btn-danger">Confirm</button>
                                </div>
                        </form>
    </div>
  </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
</body>
</html>