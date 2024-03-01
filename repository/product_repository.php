<?php 
    include("../../packages/utils/database.php");
    include("../../packages/services/base_service.php");
    // include("../../packages/models/product_model.php");

    abstract class ProductRepository extends BaseService{
        
        private $database;

         /**
         * This method gets a product through it ID
         * 
         * @param string $productId -the ID of the product
         * @return ProductModel
         */
         public function getProductById ($productId) {
            $this->database = new Database();
            
            $query="SELECT * FROM products
            WHERE productId = '$productId'";

            $result = $this->database-> connection->query($query);
            $this->database->closeConnection();


            if ($result) {
                $result = $result->fetch_assoc();
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }

        public function getAllProducts(){
            $this->database = new Database();

            $query = "SELECT * FROM products";

            $result = $this->database-> connection->query($query);

            $this->database->closeConnection();


            if ($result) {
                $result = $result->fetch_all(MYSQLI_ASSOC);
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }

        /**
         * This method gets product(s) that matches provided name
         * 
         * @param string $name -the name of the product
         */
        public function getProductByName($name) {  

            $this->database = new Database();


            $query = "SELECT * FROM Products WHERE ProductName LIKE '%$name%'";
            
            $result = $this->database-> connection->query($query);

            $this->database->closeConnection();

            if ($result) {
                $result = $result->fetch_all(MYSQLI_ASSOC);
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }

        /**
         * This method gets all products in a category
         * 
         * @param string $category The category of products
         */

        public function getAllProductsInCategory($category){
        
            $this->database = new Database();

            $query = "SELECT * FROM products WHERE category = '" . $category . "'";

            $result = $this->database-> connection->query($query);

            $this->database->closeConnection();


            if ($result) {
                $result = $result->fetch_all(MYSQLI_ASSOC);
                return $result;
            }
            die("Error executing query: " . $this->database->connection->error);
        }


        /**
         * This method creates a new product
         * @param ProductModel $productModel
         * @return bool 
         */
        public function createProduct($productModel){
            $this->database = new Database();
        
            $uuid = $this->generateUuidV4();
        
            $query = "INSERT INTO products (
                        productId, 
                        productName,
                        productDescription,
                        productPrice, 
                        productPicture,
                        createdAt,
                        isAvailable,
                        category
                    )
                    VALUES (
                        '$uuid', 
                        '".$productModel->getProductName()."',
                        '".$productModel->getProductDescription()."',
                        '".$productModel->getProductPrice()."',
                        '".$productModel->getProductPicture()."',
                        '".$productModel->getCreatedAt()."',
                        '".$productModel->isAvailable()."',
                        '".$productModel->getCategory()."'
                    )";
            $result = $this->database->connection->query($query);
        
            $this->database->closeConnection();
        
            return $result;
        }
    }
?>


