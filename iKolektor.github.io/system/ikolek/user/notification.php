<?php

include('connect.php');

function displayTimeSinceCreation($createdDateTime)
{
    $createdDate = new DateTime($createdDateTime);
    $currentDate = new DateTime();

    $interval = $currentDate->diff($createdDate);

    $timeSinceCreation = '';

    if ($interval->y > 0) {
        $timeSinceCreation .= $interval->y . ' year(s) ';
    } elseif ($interval->m > 0) {
        $timeSinceCreation .= $interval->m . ' month(s) ';
    } elseif ($interval->d > 0) {
        $timeSinceCreation .= $interval->d . ' day(s) ';
    } elseif ($interval->h > 0) {
        $timeSinceCreation .= $interval->h . ' hour(s) ';
    } elseif ($interval->i > 0) {
        $timeSinceCreation .= $interval->i . ' minute(s) ';
    } else {
        $timeSinceCreation .= $interval->s . ' second(s)';
    }

    return $timeSinceCreation;
}

function limitText($text, $limit = 150)
{
    // Truncate the text to the specified limit
    if (strlen($text) > $limit) {
        $text = substr($text, 0, $limit) . '...';
    }

    return $text;
}

function notification_entry($conn)
{
    $sql = "SELECT * FROM announcement ORDER BY announcement_id ASC LIMIT 5";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $createdDateTime = $row['announcement_date']; // Assuming 'created_at' is the column with the timestamp
            $timeSinceCreation = displayTimeSinceCreation($createdDateTime);
            $limitedText = limitText($row['ann_entry'], 25);

            echo "
            <a class='dropdown-item' href='notification_page.php'>    
                <div class='box-body p-0 bg-success' style='height:70%;'>
                    <div class='p-3 d-flex align-items-center bg-light border-bottom osahan-post-header'>
                        <div class='dropdown-list-image me-3'>
                            <i class='bi bi-bell p-1' style='font-size: 2rem;'></i>
                        </div>
                        <div class='font-weight-bold'>
                            <div class='text-truncate p-1'>" . $row['subject'] . "</div>
                            <div class='small p-1'>" . ($limitedText). "</div>
                            <div class='small p-1 text-muted'>" . $timeSinceCreation . "</div>
                        </div>
                        <span>
                            <div class='text-right text-muted pr-5 pt-5'></div>
                        </span>
                    </div>
                    <div class='dropdown-divider'></div>
                </div>
            </a>";
        }
    }
}