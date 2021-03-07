<?php
    class Dao{
        private $host = "us-cdbr-east-03.cleardb.com";
        private $db = "heroku_a8ca269478ee9f2";
        private $user = "b09ced2ae4c4e0";
        private $pass = "ad38ea62";


        public function getConnection() {
            try{
                $conn = new PDO ("mysql:host={$this->host};dbname={$this->db}", $this->user,$this->pass);
                return $conn;
            }catch (Exception $e){
                echo print_r($e,1);
                exit;
            }
        }

         public function addUser($email, $pass){
            $conn = $this->getConnection();
            $saveQ = "insert into user (email,password) values (:email,:pass);";
            $q = $conn->prepare($saveQ);
            $q->bindParam(":email",$email);
            $q->bindParam(":pass",$pass);
            $q->execute();
        }
        
        public function userExists($email, $pass){
            $conn = $this->getConnection();
            $stmt =  $conn->prepare("select * from user where email = :email and password = :pass;");
            $stmt->bindParam(":email",$email,PDO::PARAM_STR);
            $stmt->bindParam(":pass",$pass,PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(is_null($email)){
                return false;
            }else{
                if(count($result)==1){
                    return true;
                }else{
                    return false;
                }
            }
        
        }

        public function getEvents(){
            $conn = $this->getConnection();
            $stmt = $conn->query("select * from events;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>