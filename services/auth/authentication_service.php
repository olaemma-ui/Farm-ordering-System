<?php 

    include("./utils/database.php");
    // include "./utils/session.php";
    include("./constants/session_keys.php");

    class AuthenticationService{
        
        private $database;

        private $sessionManager;


        public function __construct($sessionManager) {
            $this->database = new Database();
            $this->sessionManager = $sessionManager;
        }

        /**
         * @param string email
         * @param string password
         * @param string table
         * 
         * This methods accepts the above parameters, to identify the user and the table 
         * we're to query.
         */
        public function login($email, $password, $table){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    
                // $password = sha1($password);
                $sql = "SELECT * FROM $table 
                        WHERE $table.email='$email' 
                        AND $table.password='$password'";

                $result = $this->database->select($sql);
                
                if($result){
                    
                    if (count($result) > 0) {
                        header('location:./index.php');
                        // $this->sessionManager->set(SessionKeys::$USER_ID, $result['user_id']);
                        // $this-> sessionManager-> remove(SessionKeys::$ERROR_MESSAGE);
                        return;
                    }
                    return;
                }
                $this-> sessionManager-> set(SessionKeys::$ERROR_MESSAGE, 'Invalid email or password!!!');
            }else throw new Exception("Invalid Request Method", 1);
            
        }

        public function register( $firstname, $lastname, $email, $phone, $password){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $sql = "SELECT * FROM customer 
                        WHERE customer.phone='$phone' 
                        OR customer.email='$email'";
                $result = $this->database->select($sql);
                // if ($result->num_rows > 0) {
                //     $this->sessionManager = new SessionManager();
                //     if ($result['phome'] == $phone) {
                //         $this->sessionManager->set(SessionKeys::$ERROR_MESSAGE, 'Account with this mobile number already exist!!!');
                //     }else{
                //         $this->sessionManager->set(SessionKeys::$ERROR_MESSAGE, 'Account with this email already exist!!!');
                //     }
                //     return false;
                // }else{
                //     $hash = sha1($password);

                // }

            }
        }
    }
?>