<?php 
    include("../utils/database.php");
    include("../services/base_service.php");

    abstract class OrderRepository extends BaseService{
        
        private $database;
        
         /**    
         * This method manages the application select query
         * @param string $orderId
         */
        public function getOrderById ($orderId) {
            $this->database = new Database();

            // Retrieve order by ID
            $sql = "SELECT * FROM orders WHERE orderId = $orderId";
            $result = $this->database->connection->query($sql);

        
            if ($result) {
                $result = $result->fetch_all(MYSQLI_ASSOC);
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }
        
        /**
         * 
         * @param OrderModel $order
         */
        public function createOrder($order) {  
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