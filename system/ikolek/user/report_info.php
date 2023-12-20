<?php

include('connect.php');

$conn = mysqli_connect("localhost","root","","ikolek_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['add_report']))
    {
        $subject = $_POST['subject'];
        $feedback = $_POST['feedback'];
        $email = $_POST['email'];

        $sql = "INSERT INTO report(subject, feedback, email) VALUES ('$subject', '$feedback', '$email')";
        $query = mysqli_query($conn, $sql);

        if($query)
        {
            $_SESSION['status'] = "Successfull";
            header('location: report_success.php');
        }
        else{
            $_SESSION['status'] = "Unsuccessfull";

        }
    }

?>