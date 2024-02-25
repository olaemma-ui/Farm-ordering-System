<?php 
    include("../../packages/utils/database.php");
    include("../../packages/services/base_service.php");

    abstract class ProduRepository extends BaseService{

        
        private $database;

         /**
         * This method manages the application select query
         * @param string $table
         * @param string $id
         */
        public function findById ($id) {
            $this->database = new Database();
            
            $query = "SELECT * FROM Products
            WHERE Products.='$id' ";

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
         * @param string email
         * @param string table
         */
        public function findByName($name) {  
            $this->database = new Database();

            $query = "SELECT * FROM Products WHERE Products. LIKE '%$name%'";
            
            $result = $this->database-> connection->query($query);

            if ($result) {
                $result = $result->fetch_assoc();
                $this->database->closeConnection();
                // for ($i=0; $i < ; $i++) { 
                //     # code...
                // }
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