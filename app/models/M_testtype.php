<?php
        class M_testtype{
            protected $conn;
            public function __construct(){
                $this->conn = new Database;
                $this->conn = $this->conn->dbObject();
            }

            // public function enterUserData($name,$email,$password,$phone,$dob,$gender,$address){
            //     // get last row id
            //     $result =mysqli_query($this->conn , "SELECT * FROM patient_data ORDER BY patient_id DESC LIMIT 1") ;
            //     $user = mysqli_fetch_assoc($result);
            //     $lastid = 0;
            //     if(isset($user['patient_id'])){
            //         $lastid = $user['patient_id'];
            //     }
                

            //     $nextid = $lastid +1;
            //     $query = "INSERT INTO patient_data VALUES('$nextid','$name','$email','$password','$phone','$dob','$gender','$address')";
            //     mysqli_query($this->conn , $query);
            //     // echo
            //     // "<script> alert('Registration Successful');</script>";
            // }


            public function getDuration($test_type){
                $result =mysqli_query($this->conn , "SELECT * FROM test_type WHERE Test_type='$test_type'") ;
                if(mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                    return $row["Time_duration"];;
                    
                }
                
            }
    }
?>