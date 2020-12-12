<?php
    class User extends Dbcon {
        public function getAllUsers() {
            $sql = "SELECT * from tbl_user";
            $result = $this->connect()->query($sql);
            $num = $result->num_rows;
            if ($num > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            }

        }
        public function addRecord($name, $email, $password, $mobile, $status, $ques, $ans){
            $sql = "INSERT INTO tbl_user (`email`, `name`, `mobile`,`sign_up_date`,`password`, `is_admin`, `security_question`, `security_answer`) 
				VALUES ('".$email."', '".$name."', '".$mobile."', CURRENT_TIMESTAMP, '".$password."', '".$status."', '".$ques."', '".$ans."')";
            $run = $this->connect()->query($sql);
            if ($run) 
            {
                echo '<script>alert("New user logined successfully...!!!")</script>';
            }
            else 
            {
                echo "error..";
            }
        }
    }
?>