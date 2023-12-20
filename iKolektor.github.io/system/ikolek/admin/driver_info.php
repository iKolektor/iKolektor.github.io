<?php

include('connect.php');

$conn = mysqli_connect("localhost","root","","ikolek_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['add_account']))
    {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $contact_num = $_POST['contact_num'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $truck_name = $_POST['truck_name'];

        $sql = "INSERT INTO account(driver_fname, driver_lname, driver_coninfo, username, password, driver_truck ) VALUES ('$first_name', '$last_name', '$contact_num', '$username', '$password', '$truck_name')";
        $query = mysqli_query($conn, $sql);

        if($query)
        {
            $_SESSION['status'] = "Successfull";
            header('location: track.php');
        }
        else{
            $_SESSION['status'] = "Unsuccessfull";

        }
    }

if (isset($_POST['delete_account'])) {

    $id = $_POST['account_id'];

    $sql = "DELETE FROM account WHERE account_id ='$id' ";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        reset_id($conn);
        $_SESSION['status'] = "Successfully Deleted";
        header("location: track.php");
    }
    else {
        $_SESSION['status'] = "Something is not right";
        echo "Error: ".mysqli_error($conn);
    }


}

if (isset($_POST['update_btn'])) {

    $id = $_POST['account_id'];
    $array = [];

    $sql = "SELECT * FROM account WHERE account_id='$id'";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        
        while ($row = mysqli_fetch_array($query)) {
            
            array_push($array, $row);
            header('content-type: application/json');
            echo json_encode($array);
        }
    }
}

if (isset($_POST['update_account'])) {

    $id = $_POST['account_id'];
    $fname = $_POST['driver_fname'];
    $lname = $_POST['driver_lname'];
    $contact = $_POST['driver_coninfo'];
    $truck = $_POST['driver_truck'];

    $sql = "UPDATE account SET driver_fname= '$fname', driver_lname='$lname', driver_coninfo='$contact', driver_truck='$truck' WHERE account_id = '$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $_SESSION['status'] = "Successfully Updated";
        header("location: track.php");
    }
    else {
        $_SESSION['status'] = "Something is not right, Try Again!";
        echo "Error: ".mysqli_error($conn);
    }


}

function insertTable($conn) {
    
    $id_no = 1;
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
                <a href='' class ='btn btn-success'> TRACK NOW </a>
            </td>
            <td> 
                <a href='driver_info.php?id=".$row['account_id']."' class='btn btn-success update-btn'> UPDATE</a>
                <a href='driver_info.php?id=".$row['account_id']."' class='btn btn-danger delete-btn'> DELETE</a>
            </td>
                </tr>";     
                }

        }
}

function reset_id($conn) {
    $auto_set = mysqli_query($conn,"ALTER TABLE account AUTO_INCREMENT=1");
    $sql = mysqli_query($conn, "SELECT * FROM account");
    $number=1;
    while($row=mysqli_fetch_array($sql)){
        $id=$row['account_id'];
        $query = "UPDATE account SET account_id=$number WHERE account_id = $id";
        if($conn ->query($query) == TRUE){
            $auto_set;
            echo "Reset Successfull";
        }
        $number++;
    }
}
?>