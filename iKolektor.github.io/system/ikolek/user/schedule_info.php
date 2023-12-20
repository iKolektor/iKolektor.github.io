<?php

include('connect.php');

function insertTable($conn) {
    
    $sql = "SELECT * FROM trucks";
    $query = mysqli_query($conn, $sql); 
    if(mysqli_num_rows($query) > 0)
{
    while($row = mysqli_fetch_array($query))
{ echo "
        <tr style='font-size: smaller;'>
            <td>".$row['truck_name']."</td>
            <td>".$row['day_of_the_week']."</td>
            <td>".$row['route']."</td>
        </tr>";     
                }

        }
}

?>