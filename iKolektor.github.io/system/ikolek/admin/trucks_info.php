<?php

include('connect.php');

function reset_id($conn) {
    $auto_set = mysqli_query($conn,"ALTER TABLE trucks AUTO_INCREMENT=1");
    $sql = mysqli_query($conn, "SELECT * FROM trucks");
    $number=1;
    while($row=mysqli_fetch_array($sql)){
        $id=$row['truck_id'];
        $query = "UPDATE trucks SET truck_id=$number WHERE truck_id = $id";
        if($conn ->query($query) == TRUE){
            $auto_set;
            echo "Reset Successfull";
        }
        $number++;
    }
}

if (isset($_POST['delete_truck'])) {

    $id = $_POST['truck_id'];

    $sql = "DELETE FROM trucks WHERE truck_id ='$id' ";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        reset_id($conn);
        $_SESSION['status'] = "Successfully Deleted";
        header("location: trucks.php");
    }
    else {
        $_SESSION['status'] = "Something is not right";
        echo "Error: ".mysqli_error($conn);
    }


}

if (isset($_POST['update_btn'])) {

    $id = $_POST['truck_id'];
    $array = [];

    $sql = "SELECT * FROM trucks WHERE truck_id='$id'";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        
        while ($row = mysqli_fetch_array($query)) {
            
            array_push($array, $row);
            header('content-type: application/json');
            echo json_encode($array);
        }
    }
}

if (isset($_POST['update_trucks'])) {

    $id = $_POST['truck_id'];
    $tname = $_POST['truck_name'];
    $day = $_POST['day_of_the_week'];
    $route = $_POST['route'];
    $link = $_POST['route_link'];

    $sql = "UPDATE trucks SET truck_name= '$tname', day_of_the_week='$day', route='$route', route_link='$link' WHERE truck_id = '$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $_SESSION['status'] = "Successfully Updated";
        header("location: trucks.php");
    }
    else {
        $_SESSION['status'] = "Something is not right, Try Again!";
        echo "Error: ".mysqli_error($conn);
    }


}

function insertTable($conn) {
    
    $sql = "SELECT * FROM trucks";
    $query = mysqli_query($conn, $sql); 
    if(mysqli_num_rows($query) > 0)
{
    while($row = mysqli_fetch_array($query))
{ echo "
        <tr>
            <td class='truck_id'>".$row['truck_id']. "</td>
            <td>".$row['truck_name']."</td>
            <td>".$row['day_of_the_week']."</td>
            <td>".$row['route']."</td>
            <td>".$row['route_link']."</td>
            <td>
                <div>
                    <a href='trucks_info.php?id=".$row['truck_id']."' class='btn btn-success update-btn'> UPDATE</a>
                </div>
                <div>
                <br>
                    <a href='trucks_info.php?id=".$row['truck_id']."' class='btn btn-danger delete-btn'> DELETE</a>
                </div> 
            </td>
                </tr>";     
                }

        }
}