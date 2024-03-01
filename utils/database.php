<?php 

    /**
     * This class creates a connection to the database
     * @property username this is the database username
     * @property servername this is the server name we're our database is located
     * @property password this is the database password that'll be used for connecting to the server
     * @property connection this defines the database connection to mysql
     * @property connect this method is called to connect to the database
     */
    
     class Database {
        
        // server name
        private $servername = "localhost";
        
        // Database username
        private $username = "root";
        
        // databse password
        private $password = "";
        
        // databse password
        private $database = "farm_product";

        // Databse connection variable
        public $connection;

        // This is method opens/create the database connection for the application
        public function __construct(){
            $this->connection = new mysqli($this->servername, $this->username,
             $this->password, $this->database);

            // Check connectionection
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
            // echo "Connection successfully";
        }

        // This is method close the database connection
        public function closeConnection(){
            $this->connection->close();
        }
    }

?>