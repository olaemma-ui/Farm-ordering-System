<?php 
    include("../utils/database.php");
    include("../services/base_service.php");

    abstract class OrderRepository extends BaseService{
        
        private $database;
        
         /**    
         * This method manages the application select query
         * @param string $orderId
         * @return OrderModel
         */
        public function getOrderById_($orderId) {
            $this->database = new Database();

            // Retrieve order by ID
            $sql = "SELECT * FROM orders WHERE orderId = $orderId";
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
         * @return OrderModel
         */
        public function getAllOrders_($userId) {
            $this->database = new Database();

            // Retrieve order by ID
            $sql = "SELECT * FROM orders WHERE userId = $userId";
            $result = $this->database->connection->query($sql);

        
            if ($result) {
                $result = $result->fetch_assoc();
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }
        
        /**
         * 
         * @param OrderModel $order
         */
        public function createOrder_($order) {  
            $this->database = new Database();
            $uuid = $this->generateUuidV4();

            $query = "INSERT INTO orders (
                transactionId,
                totalCost,
                orderDate,
                orderStatus,
                userId,
                orderId,
                ) VALUES (
                    '".$order->getTransactionId()."', 
                    '".$order->getTotalCost()."', 
                    '".$order->getOrderDate()."',
                    '".$order->getOrderStatus()."',
                    '".$order->getUserId()."',
                    '".$uuid."',
                )";
            
            $result = $this->database->connection->query($query);
            $this->database->closeConnection();
            return $result;
        }
        
    }