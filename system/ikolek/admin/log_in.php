<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Log In - iKolek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<nav class="navbar rounded shadow-sm">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand justify-content-end" href="log_in.php">
                <img class="img-fluid" src="logo.png" alt="logo" width="300" height="50">
            </a>
                <button class="navbar-toggler border border-0 justify-content-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                </button>
            </div>
        </div>
    </nav>
<section id="gap" class="container h-100 mt-5">
    <div class="row justify-content-sm-center h-100 align-items-center">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h1 class="fs-4 text-center fw-bold mb-4"> Admin Login</h1>
                    <h1 class="fs-6 mb-3">Please enter your usermname and password to log in.</h1>
                    <form method="POST" class="needs-validation" novalidate=""
                        autocomplete="off" action="login_config.php">
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="usermname">Username</label>
                            <div class="input-group input-group-join mb-3">
                                <input id="username" type="usermname" placeholder="Enter Username" class="form-control"
                                    name="username" value="" required autofocus>
                                    <span class="input-group-text rounded-end">&nbsp<i class="fa fa-envelope"></i>&nbsp</span>
                                <div class="invalid-feedback">
                                    Usermname is invalid
                                </div>
                            </div>
                        </div>
                            <div class="input-group input-group-join mb-3">
                                <input type="password" class="form-control" placeholder="Your password" name="password" required>
                                <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i class="fa fa-eye"></i>&nbsp</span>
                                <div class="invalid-feedback">
                                    Password required
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid d-flex">
                            <button type="submit" class="btn btn-primary ms-auto">
                                Login
                            </button>
                        </div>
                    </form>
                    <br>
            </div>
        </div>
    </div>
</section>
</body>
