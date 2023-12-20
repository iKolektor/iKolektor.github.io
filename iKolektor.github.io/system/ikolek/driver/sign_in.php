
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Sign In - iKolek </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <style>
        #gap {
            margin-top: 200px;
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
            border-bottom-style: solid;
            border-width: 20px;
            border-color: yellow;
        }

        .demo-bg {
            opacity: 0.6;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 1000px;
        }
        </style>
<body>
<div class="demo-wrap">
  <img
    class="demo-bg"
    src="background.png"
    alt=""
>
<nav class="navbar fixed-top navbar-expand-sm justify-content-center" id="naviar">
        <div class="navbar-nav">
            <div nav-item>
                <a style="text-decoration: none" href="homepage.php" id="title">iKolek</a>
            </div>
        </div>
</nav>
<div>
<section id="gap" class="container h-100">
    <div class="row justify-content-sm-center h-100 align-items-center">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <h1 class="fs-4 text-center fw-bold mb-4">Driver Login</h1>
                    <h1 class="fs-6 mb-3">Please enter your usermname and password to log in.</h1>
                    <form method="POST" class="needs-validation" novalidate=""
                        autocomplete="off" action="sign_config.php">
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

                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted" for="password">Password</label>
                                <a href="forgot.html" class="float-end">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="input-group input-group-join mb-3">
                                <input type="password" class="form-control" placeholder="Your password" name="password" autocomplete="off" required>
                                <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i class="fa fa-eye"></i>&nbsp</span>
                                <div class="invalid-feedback">
                                    Password required
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary ms-auto">
                                Login
                            </button>
                        </div>
                    </form>
                    <br>
                <div class="card-footer py-3 border-0">
                    <div class="text-center">
                        Don't have an account yet? <a href="registration.php" class="text-dark">Create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
