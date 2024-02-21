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
         * @param SigninRequest $request
         * This methods accepts the above parameters, to identify the user and the table 
         * we're to query.
         * 
         * @param string $tableName
         */
        public function login($request, $tableName){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $result = $this->findByEmailAndPassword(
                    $request->getEmail(), 
                    $request->getPassword(), 
                    $tableName
                );

                if($result){
                    if (count($result) > 0) {
                        $this-> sessionManager-> set(SessionKeys::$USER_ID, $result['user_id']);
                        $this-> sessionManager-> remove(SessionKeys::$ERROR_MESSAGE);
                        header('location:./index.php');
                    }
                    return;
                }
                $this-> sessionManager-> set(SessionKeys::$ERROR_MESSAGE, 'Invalid email or password!!!');
            }else throw new Exception("Invalid Request Method", 1);
            
        }


        /**
         * 
         * @param SignupRequest $request
         */
        public function register( $request){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                
                $result = $this->findByPhoneOrEmail($request->getEmail(), 'customer');

                if ($result) {
                    if ($result['email'] == $request->getEmail()) {
                        $this->sessionManager->set(
                            SessionKeys::$ERROR_MESSAGE, 
                            'Account with this email already exist!!!'
                        );
                        // die('');
                    }
                    return false;
                }else{
                    $hash = sha1($request->getPassword());

                }

            }
        }
    }
?>