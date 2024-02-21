<?php 
    include("./utils/database.php");

    abstract class AuthenticationRepository{

        
        private $database = new Database();

         /**
         * This method manages the application select query
         * @param string $table
         * @param string $password
         * @param string $email
         * 
         */
        public function findByEmailAndPassword ($email, $password, $table) {
            $query = "SELECT * FROM $table 
            WHERE $table.email='$email' 
            AND $table.password='$password'";

            $result = $this->database-> connection->query($query);
            if ($result) {
                $result = $result->fetch_assoc();
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }
        
        /**
         * 
         * @param string email
         * @param string phone
         * @param string table
         */
        public function findByPhoneOrEmail( $email, $phone, $table) {  
            
            $query = "SELECT * FROM $table 
            WHERE $table.phone='$phone' 
            OR $table.email='$email'";
            
            $result = $this->database-> connection->query($query);

            if ($result) {
                $result = $result->fetch_assoc();
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }

        

    }

?>