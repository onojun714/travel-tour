<?php

    include 'classes/Travel-tour.php';
    $ContactObj = new Travel_tour;

    if(isset($_POST['send_fb'])){
      $f_name = $_POST['fname'];
      $l_name = $_POST['lname'];
      $e_mail = $_POST['email'];
      $user_comment = $_POST['comment'];

      $ContactObj->user_feedback($f_name,$l_name,$e_mail,$user_comment);

    }elseif(isset($_POST['reservation_btn'])){
      $dest = $_POST['destination'];
      $dep_air = $_POST['airport'];
      $dep_date = $_POST['date'];
      $stay_days = $_POST['stay'];
      $persons_num = $_POST['persons'];
      $rooms_num = $_POST['rooms'];
      $require_ment = $_POST['require'];

      $ContactObj->user_reservation($dest,$dep_air,$dep_date,$stay_days,$persons_num,$rooms_num,$require_ment);

    }elseif(isset($_POST['login_btn'])){
      $email_add = $_POST['email'];
      $psw = $_POST['passw'];

      $ContactObj->user_login($email_add,$psw);

    }elseif(isset($_POST['register_btn'])){
      $first = $_POST['first'];
      $last = $_POST['last'];
      $birth = $_POST['bday'];
      $phone = $_POST['phonum'];
      $email = $_POST['mail'];
      $passw = $_POST['psw'];
      $cityadd = $_POST['city'];
      $credit = $_POST['crenum'];
      $passn = $_POST['passno'];

      $ContactObj->user_register($first,$last,$birth,$phone,$email,$passw,$cityadd,$credit,$passn);

    }elseif(isset($_POST['update_btn'])){
      $fname = $_POST['first'];
      $lname = $_POST['last'];
      $birth = $_POST['bday'];
      $phonum = $_POST['phonum'];
      $e_mail = $_POST['mail'];
      $psw = $_POST['psw'];
      $homeadd = $_POST['city'];
      $crenum = $_POST['crenum'];
      $passno = $_POST['passno'];
      $member_id = $_POST['member_id'];

      $ContactObj->Update_member($fname,$lname,$birth,$phonum,$e_mail,$psw,$homeadd,$crenum,$passno,$member_id);

    }
?>