<?php

    class Model {
        private $server = "localhost";
        private $username = "root";
        private $password ;
        private $db = "crud_php";
        private $conn;

        public function __construct(){
            try{
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db
            );
            } catch(Exception $e){
                echo "Failed" . $e->getMessage();
            }
        }

        public function insert(){
            if(isset($_POST['submit'])){
                if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state']) &&
                isset($_POST['zip'])){

                    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) &&
                    !empty($_POST['zip'])){

                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $address = ($_POST['address']);
                            $city = $_POST['city'];
                            $state = ($_POST['state']);
                            $zip = ($_POST['zip']);

                           $this->conn->query("insert into records (email,pass,address,city,state,zip) values ($email, $password, $address, $city, $state, $zip )");
                }

                }
            }
        }
    }


?>