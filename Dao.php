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

        /* public function addUser($user, $pass, $acc){
            $conn = $this->getConnection();
            $saveQ = "insert into user (username,password,access) values (:user,:pass,:acc);";
            $q = $conn->prepare($saveQ);
            $q->bindParam(":user",$user);
            $q->bindParam(":pass",$pass);
            $q->bindParam(":acc",$acc);
            $q->execute();
        } */
        
        /* public function userExists($user, $pass){
            $conn = $this->getConnection();
            $stmt =  $conn->prepare("select * from user where username = :user and password = :pass;");
            $stmt->bindParam(":user",$user,PDO::PARAM_STR);
            $stmt->bindParam(":pass",$pass,PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(is_null($user)||$user==""){
                return false;
            }else{
                if(count($result)==1){
                    return true;
                }else{
                    return false;
                }
            }
        
        } */
    }
?>