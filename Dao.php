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

        public function emailExists($email){
            $conn = $this->getConnection();
            $stmt =  $conn->prepare("select * from user where email = :email");
            $stmt->bindParam(":email",$email,PDO::PARAM_STR);
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
        
        public function addPreferences($background, $font, $image){
           $conn = $this->getConnection();
           $savePref = "insert into preferences (background,font,image) values (:background,:font,:image);";
           $p = $conn->prepare($savePref);
           $p->bindParam(":background",$background);
           $p->bindParam(":font",$font);
           $p->bindParam(":image",$image);
           $p->execute();
       }

        public function getEvents(){
            $conn = $this->getConnection();
            $stmt = $conn->query("select * from events;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getMyEvents($username){
            $conn = $this->getConnection();
            $savePref = "slect * form events where eventCreatorEmail = :user;";
            $p = $conn->prepare($savePref);
            $p->bindParam(":user",$username);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function updateMyEvents($username){
            $conn = $this->getConnection();
            $savePref = "slect * form events where eventCreatorEmail = :user;";
            $p = $conn->prepare($savePref);
            $p->bindParam(":user",$username);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function addQuestion($email, $ask, $ans){
            $conn = $this->getConnection();
            $saveQ = "insert into questions (questionEmail, questionAsk, questionAnswer) values (:email,:ask, :ans);";
            $q = $conn->prepare($saveQ);
            $q->bindParam(":email",$email);
            $q->bindParam(":ask",$ask);
            $q->bindParam(":ans", $ans);
            $q->execute();
        }

        public function getUserQuestions(){
            $conn = $this->getConnection();
            $stmt = $conn->query("select * from questions where questionEmail = :user;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getQuestions(){
            $conn = $this->getConnection();
            $stmt = $conn->query("select * from questions;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function answerQuestions($answer, $ID){
            $conn = $this->getConnection();
            $savePref = ("update questions set questionAnswer = :answer where questionID = :ID;");
            $p = $conn->prepare($savePref);
            $p->bindParam(":answer",$answer);
            $p->bindParam(":ID",$ID);
            $p->execute();
        }

        public function deleteQuestion($ID){
            $conn = $this->getConnection();
            $savePref = ("delete from questions where questionID = :ID;");
            $p = $conn->prepare($savePref);
            $p->bindParam(":ID",$ID);
            $p->execute();
        }
    }
?>
