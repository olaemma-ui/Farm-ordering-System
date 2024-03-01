<?php 
    include("../../packages/utils/database.php");
    include("../../packages/services/base_service.php");

    abstract class AuthenticationRepository extends BaseService{
        
        private $database;
        
         /**    
         * This method manages the application select query
         * @param string $table
         * @param SigninRequest $request
         */
        public function findByEmailAndPassword ($request, $table) {
            $this->database = new Database();

            // echo '{"Hello": "' . $request->toString(). '"}';
            
            $email = $request->getEmail();
            // $password = sha1($request->getPassword());
            $password = $request->getPassword();


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
         * @param string table
         */
        public function findByEmail($email, $table) {  
            $this->database = new Database();

            $query = "SELECT * FROM $table WHERE $table.email='$email'";
            
            $result = $this->database-> connection->query($query);

            if ($result) {
                $result = $result->fetch_assoc();
                $this->database->closeConnection();
                
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }

        /**
         * 
         * @param SignupRequest $request
         * @return bool 
         */
        public function saveCustomer($request){
            $this->database = new Database();
            $uuid = $this->generateUuidV4();
            $hash = sha1($request->getPassword());
            $query = "INSERT INTO customer (user_id, firstName, lastName, email, password, createdAt)
            VALUES
                ('$uuid', '".$request->getFirstname()."', '".$request->getLastname()."', '".$request->getEmail()."', '$hash', NOW()
            )";
            $result = $this->database->connection->query($query);

            $this->database->closeConnection();

            return $result;
        }
        
    }

?>