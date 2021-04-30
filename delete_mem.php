<?php
    include 'travel-action.php';
   
    $member_id = $_GET['member_id'];
    $ContactObj->Delete_member($member_id);

?>
