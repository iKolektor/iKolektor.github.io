<?php
session_start();
require('connect.php');

if (isset($_REQUEST['username'])){
    $firstname = stripslashes($_REQUEST['driver_fname']);
	$firstname = mysqli_real_escape_string($conn,$firstname);
    $lastname = stripslashes($_REQUEST['driver_lname']);
	$lastname = mysqli_real_escape_string($conn,$lastname);  
	$contact = stripslashes($_REQUEST['driver_coninfo']);
	$contact = mysqli_real_escape_string($conn,$contact);
    $username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username); 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
    $truck = stripslashes($_REQUEST['driver_truck']);
	$truck = mysqli_real_escape_string($conn,$truck); 

    $errors = [];

    $check_duplicate_truck = "SELECT * FROM account WHERE driver_truck = '$truck'";
    $request_truck = mysqli_query($conn, $check_duplicate_truck);
    $truck_count = mysqli_num_rows($request_truck);

    if ($truck_count>0){
        $errors['truck'] = "Wrong truck, already in use!";
    }

    $check_duplicate_contact = "SELECT * FROM account WHERE driver_coninfo = '$contact'";
    $request_contact = mysqli_query($conn, $check_duplicate_contact);
    $contact_count = mysqli_num_rows($request_contact);

    if ($contact_count>0){
        $errors['contact'] = "Wrong mobile numnber, already in use";
    }

    $check_duplicate_username = "SELECT * FROM account WHERE username = '$username'";
    $request_username = mysqli_query($conn, $check_duplicate_username);
    $username_count = mysqli_num_rows($request_username);

    if ($username_count>0){
        $errors['username'] = "Invalid username, already taken";
    }


    if(count($errors)==0){

        $query = "INSERT into `account` (driver_fname, driver_lname, driver_coninfo, username, password, driver_truck)
        VALUES ('$firstname','$lastname', '$contact', '$username', '".md5($password)."', '$truck')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<script>alert('Successfully Registered!, Try Logging In!')</script>')";
        }
    
    } else{

        $_SESSION['status'] = "Unsuccessful registration, Try Again!.";
        header('location: registration.php');
    }

    }

?>