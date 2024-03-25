

<?php 
    include("../utils/database.php");
    include("../services/base_service.php");

    abstract class AddressRepository extends BaseService{
        
        private $database;
        
         /**    
         * This method manages the application select query
         * @param string $addressId
         * @return AddressModel
         */

        public function getAddressById_($addressId) {
            $this->database = new Database();

            // Retrieve order by ID
            $sql = "SELECT * FROM addresses WHERE addressId = $addressId";
            $result = $this->database->connection->query($sql);

        
            if ($result) {
                $result = $result->fetch_assoc();
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }
        
         /**    
         * This method manages the application select query
         * @param string $userId
         */
        public function getAllAddress_($userId) {
            $this->database = new Database();

            // echo 'userId = '. $userId . ' =====';

            // Retrieve order by ID
            $sql = "SELECT * FROM addresses WHERE userId = '".$userId."'";
            $result = $this->database->connection->query($sql);

        
            if ($result) {
                $result = $result->fetch_all(MYSQLI_ASSOC);
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }
        
        /**
         * 
         * @param AddressModel $address
         */
        public function createAddress_( AddressModel $address) {  
            $this->database = new Database();
            $uuid = $this->generateUuidV4();

            $query = "INSERT INTO addresses (
                        addressId, street, city, 
                        state, country, zipCode, 
                        address, created_at, userId, 
                        category
                    )
                    VALUES (
                        '".$uuid."', 
                        '".$address->getStreet()."', 
                        '".$address->getCity()."', 
                        '".$address->getState()."', 
                        '".$address->getCountry()."', 
                        '".$address->getZipCode()."', 
                        '', 
                        '".$address->getCreatedAt()."', 
                        '".$address->getUserId()."', 
                        '".$address->getCategory()."'
                    )";
            
            $result = $this->database->connection->query($query);
            $this->database->closeConnection();
            return $result;
        }
        
    }