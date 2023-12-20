<?php

$conn = mysqli_connect("localhost", "root", "", "ikolek_db");



if (isset($_POST['delete_announcement'])) {

        $id = $_POST['deleter'];

        $sql = "DELETE FROM announcement WHERE announcement_id ='$id' ";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            $_SESSION['status'] = "Successfully Deleted";
            header("location: announcement.php");
        }
        else {
            $_SESSION['status'] = "Something is not right";
            echo "Error: ".mysqli_error($conn);
        }


    }
?>