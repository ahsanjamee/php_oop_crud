

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

                            $query = "insert into records (email,pass,address,city,state,zip) values ('$email', '$password', '$address', '$city', '$state', '$zip' )";
                        

                          if($sql = $this->conn->query($query)){
                            echo "<script>showAlert('success', 'success')</script>";
                            //echo "<script>window.location.href = 'index.php'</script>";
                          }
                          else{
                            echo "<script>alert('failed')</script>";
                            echo "<script>window.location.href = 'index.php'</script>";
                          }
                }
                else{
                    echo "<script>showAlert('danger', 'empty');</script>";
                    //echo "<script>window.location.href = 'index.php'</script>";
                }

                }
            }
        }

        public function fetch(){
            $data = null;

            $query = "select * from records";
            if($sql = $this->conn->query($query)){
                while($row = mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function delete($id){
            $query = "DELETE FROM records WHERE id = '$id'";
            if($sql = $this->conn->query($query)){
                return true;
            }
            else{
                return false;
            }
        }

        public function fetch_single($id){
            $data = null;
            $query = "select * from records where id = '$id'";
            if($sql = $this->conn->query($query)){
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }

        public function edit($data){
           $query = "UPDATE records SET email ='$data[email]',pass='$data[password]', address ='$data[address]',city ='$data[city]', state ='$data[state]', zip ='$data[zip]' WHERE id = '$data[id]'";
           
           if($sql = $this->conn->query($query)){
                return true;
                
        }
        else {echo false;}
    }
    }


?>

<script src="app.js"></script>