<?php 
    include("./utils/database.php");

    abstract class AuthenticationRepository{

        
        private $database;

         /**
         * This method manages the application select query
         * @param string $table
         * @param string $password
         * @param string $email
         * 
         */
        public function findByEmailAndPassword ($email, $password, $table) {
            $this->database = new Database();
            
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
        public function findByPhoneOrEmail( $email, $table) {  
            $this->database = new Database();

            $query = "SELECT * FROM $table WHERE $table.email='$email'";
            
            $result = $this->database-> connection->query($query);

            if ($result) {
                $result = $result->fetch_assoc();
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }

        

    }

?>