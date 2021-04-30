<?php
   include 'Database.php';

   class Travel_tour extends Database{
     
       public function user_feedback($fname,$lname,$emailadd,$comment){
            $sql = "INSERT INTO contact(first_name,last_name,email_add,comment)VALUES('$fname','$lname','$emailadd','$comment')";

            $result = $this->mysqli_obj->query($sql);

            if($result == TRUE){
                header('location:complete_contact.php');
                // echo "<div class = 'alert alert-success mt-3'>Feedback Sent Successfully</div>";
            }else{
                die('ERROR'.$this->mysqli_obj->error);
            }
       }

       public function user_reservation($desti,$dep_port,$dep_date,$stay_d,$p_num,$r_num,$require){
            //  $sql = "SELECT * FROM member_info WHERE f_name = '' AND l_name = '' AND birth_day = '' AND phone_num = '' AND e_mail = '' AND home_address = '' AND credit_num = '' AND passport = ''";
            $member_id = $_SESSION['member_id'];

            $sql = "INSERT INTO reservation(destination,airport,dep_date,stay,persons,rooms,requirements,member_id)VALUES('$desti','$dep_port','$dep_date','$stay_d','$p_num','$r_num','$require','$member_id')";

            $result = $this->mysqli_obj->query($sql);

            if($result == TRUE){
                header('location:complete_reserve.php');
                // echo "<div class = 'alert alert-success mt-3'>Feedback Sent Successfully</div>";
            }else{
                die('ERROR'.$this->mysqli_obj->error);
            }
       }

       public function user_login($email,$password){
            $sql = "SELECT * FROM member_info WHERE e_mail = '$email' AND pass_word = '$password'";

            $result = $this->mysqli_obj->query($sql);    

            if($result->num_rows ==1){
                $row = $result->fetch_assoc();
                $_SESSION['f_name'] = $row['f_name'];                                         
                $_SESSION['l_name'] = $row['l_name'];
                $_SESSION['login_id'] = $row['login_id'];
                $_SESSION['member_id'] = $row['member_id'];
                header('location:reservation.php');
                // echo "<div class = 'alert alert-success mt-3'>Feedback Sent Successfully</div>";
            }else{
                die('ERROR'.$this->mysqli_obj->error);
            }
       }

       public function user_register($f_name,$l_name,$birthday,$phone,$mail,$passw,$haddress,$credit,$pass_num){
            $sql = "INSERT INTO member_info(f_name,l_name,birth_day,phone_num,e_mail,pass_word,home_address,credit_num,passport)VALUES('$f_name','$l_name','$birthday','$phone','$mail','$passw','$haddress','$credit','$pass_num')";

            $result = $this->mysqli_obj->query($sql);

            if($result == TRUE){
                header('location:complete_register.php');
                // echo "<div class = 'alert alert-success mt-3'>Feedback Sent Successfully</div>";
            }else{
                die('ERROR'.$this->mysqli_obj->error);
            }
    }

       public function Display_member(){
            $sql = "SELECT * FROM member_info";

            $result = $this->mysqli_obj->query($sql);

            if($result->num_rows >0){
                $container = array();
                while($row = $result->fetch_assoc()){
                $container[] = $row;
            }
            return $container;
        }else{
            return FALSE;
        }
   }

        public function Update_member($fname,$lname,$birth,$phonum,$e_mail,$psw,$homeadd,$crenum,$passno,$member_id){
            $sql = "UPDATE member_info SET f_name='$fname', l_name='$lname', birth_day='$birth', phone_num='$phonum'  e_mail='$e_mail' pass_word='$psw' home_address='$homeadd' credit_num='$crenum' passport='$passno' WHERE member_id='$member_id'";

            $result = $this->mysqli_obj->query($sql);

            if($result == TRUE){
                header('location:dashboard.php');
            }else{
                die($this->mysqli_obj->error);
            }
}

        public function Delete_member($member_id){
            $sql = "DELETE FROM member_info WHERE member_id = '$member_id'";

            $result = $this->mysqli_obj->query($sql);

            if($result == TRUE){
                header('location:dashboard.php');
            }else{
                die($this->mysqli_obj->error);
            }
}

        public function get_one_item($member_id){
            $sql = "SELECT * FROM member_info WHERE member_id = '$member_id'";

            $result = $this->mysqli_obj->query($sql);

            if($result == TRUE){
                return $result->fetch_assoc();
            }else{
                die($this->mysqli_obj->error);
            }
}

        public function Display_reservation(){
            $sql = "SELECT * FROM reservation";

            $result = $this->mysqli_obj->query($sql);

            if($result->num_rows >0){
                $content = array();
                while($row = $result->fetch_assoc()){
                $content[] = $row;
            }
            return $content;
        }else{
            return FALSE;
        }
}

        public function Delete_reserve($reservation_id){
            $sql = "DELETE FROM reservation WHERE reservation_id = '$reservation_id'";

            $result = $this->mysqli_obj->query($sql);

            if($result == TRUE){ 
                header('location:dashboard.php');
            }else{
                die($this->mysqli_obj->error);
            }
}

        public function Display_contact(){
            $sql = "SELECT * FROM contact";

            $result = $this->mysqli_obj->query($sql);

            if($result->num_rows >0){
                $container = array();
                while($row = $result->fetch_assoc()){
                $container[] = $row;
            }
            return $container;
        }else{
            return FALSE;
        }
}

        public function Delete_contact($contact_id){
            $sql = "DELETE FROM contact WHERE contact_id = '$contact_id'";

            $result = $this->mysqli_obj->query($sql);

            if($result == TRUE){ 
                header('location:dashboard.php');
            }else{
                die($this->mysqli_obj->error);
            }
}


}
?>