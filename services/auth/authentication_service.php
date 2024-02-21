<?php 

    // include "./utils/session.php";
    include("./constants/session_keys.php");
    include("./repository/auth_repository.php");

    class AuthenticationService extends AuthenticationRepository{
        
        private $sessionManager;


        public function __construct($sessionManager) {
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
        public function login($email, $password){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $result = $this->findByEmailAndPassword($email, $password, 'customer');

                if($result){
                    if (count($result) > 0) {
                        header('location:./index.php');
                        $this-> sessionManager-> set(SessionKeys::$USER_ID, $result['user_id']);
                        $this-> sessionManager-> remove(SessionKeys::$ERROR_MESSAGE);
                    }
                    return;
                }
                $this-> sessionManager-> set(SessionKeys::$ERROR_MESSAGE, 'Invalid email or password!!!');
            }else throw new Exception("Invalid Request Method", 1);
            
        }


        /**
         * 
         * @param string firstname
         * @param string lastname
         * @param string email
         * @param string phone
         * @param string password
         */
        public function register( $firstname, $lastname, $email, $phone, $password){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                
                $result = $this->findByPhoneOrEmail($email, $phone, 'customer');

                if ($result) {
                    $this->sessionManager = new SessionManager();
                    if ($result['phone'] == $phone) {
                        $this->sessionManager->set(SessionKeys::$ERROR_MESSAGE, 'Account with this mobile number already exist!!!');
                    }else{
                        $this->sessionManager->set(SessionKeys::$ERROR_MESSAGE, 'Account with this email already exist!!!');
                    }
                    return false;
                }else{
                    $hash = sha1($password);

                }

            }
        }
    }
?>