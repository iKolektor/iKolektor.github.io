<?php
include('reg.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Registration - iKolek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        #gap {
            margin-top: 100px;
        }

        #title {
            font-size: 23px;
            font-weight: 800;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: white;
        }

        #naviar {
            background-color: blue;
            padding: 30px;
        }

        body {
            background-color: white;
        }

        </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-sm justify-content-center" id="naviar">
        <div class="navbar-nav">
            <div nav-item>
                <a style="text-decoration: none" href="registration.php" id="title">iKolek</a>
            </div>
        </div>
</nav>
<?php
            if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
            ?>
                <div class="alert alert-success alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> <p> <?php echo $_SESSION['status']; ?>
                </div>
            <?php
                unset($_SESSION['status']);
            }
            ?>s
<div id="gap" class="container h-100">
<div class="row justify-content-sm-center h-100 align-items-center">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                        <h1 class="fs-4 text-center fw-bold mb-4"> Driver Registration Form</h1>
                        <form name="" action="reg.php" method="post" autocomplete="off">
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="driver_fname"> First Name : </label>
                                        <input type="text" name="driver_fname" class="form-control" oninvalid="setCustomValidity('Please enter alphabets only. ')" placeholder="First Name" name="fullName" value="" required autofocus/>
                                </div>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted"for="driver_lname"> Last Name : </label>
                                        <input type="text" name="driver_lname" class="form-control"   oninvalid="setCustomValidity('Please enter alphabets only. ')" placeholder="Last Name" required/>
                                </div>
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="driver_coninfo"> Contact Number : </label>
                                        <input type="text" id="driver_coninfo" name="driver_coninfo" class="form-control" placeholder="+63" oninvalid="setCustomValidity('Invalid mobile number. ')" pattern="09[0-9]{9}" maxlength="11" required>                                        
                                        <small><?php echo $errors['contact'] ?? '' ?></small>                                
                                </div>
                                <div class="dropup mb-3 ">
                                        <label class="mb-2 text-muted" for="driver_truck"> Truck you Drive:  </label>
                                        <select class="form-select"name="driver_truck" required>
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
                                        <small><?php echo $errors['truck'] ?? '' ?></small>
                                </div>                
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="username"> Username : </label>
                                        <input type="username" name="username" class="form-control" placeholder="Username" autocomplete="off" required/>
                                        <small><?php echo $errors['username'] ?? '' ?></small>
                                </div>  
                                <div class="mb-3">
                                        <label class="mb-2 text-muted" for="password"> Password : </label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required/>
                                </div>
                                        <div class="d-flex flex-row-reverse">
                                                <input class="btn btn-success" type="submit" name="submit_dinfo" value="Register"/>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
</div>
</body>
</html>