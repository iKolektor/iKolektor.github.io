<?php

session_start();
include ('connect.php');
if(isset($_POST['add_entry']))
    {   

        $ann_entry = $_POST['announcement_entry'];
        $subject = $_POST['subject_ann'];

        $sql = "INSERT INTO announcement(subject, ann_entry) VALUES('$subject', '$ann_entry')";
        $query = mysqli_query($conn, $sql);

        if($query)
        {
            reset_id($conn);
            $_SESSION['status'] = "Successfull";
            header('location: announcement.php');
        }
        else{
            $_SESSION['status'] = "Unsuccessfull";

        }
    }

if (isset($_POST['delete_announcement'])) {

        $id = $_POST['deleter'];

        $sql = "DELETE FROM announcement WHERE announcement_id ='$id' ";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            reset_id($conn);
            $_SESSION['status'] = "Successfully Deleted";
            header("location: announcement.php");
        }
        else {
            $_SESSION['status'] = "Something is not right";
            echo "Error: ".mysqli_error($conn);
        }


}

function reset_id($conn) {
    $auto_set = mysqli_query($conn,"ALTER TABLE announcement AUTO_INCREMENT=1");
    $sql = mysqli_query($conn, "SELECT * FROM announcement");
    $number=1;
    while($row=mysqli_fetch_array($sql)){
        $id=$row['announcement_id'];
        $query = "UPDATE announcement SET announcement_id=$number WHERE announcement_id = $id";
        if($conn ->query($query) == TRUE){
            $auto_set;
            echo "Reset Successfull";
        }
        $number++;
    }
}
