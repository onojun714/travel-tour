<?php
    include 'travel-action.php';
   
    $reservation_id = $_GET['reservation_id'];
    $ContactObj->Delete_reserve($reservation_id);

?>