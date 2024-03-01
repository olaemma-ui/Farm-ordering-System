<?php 

    // include "./utils/session.php";
    include("../../packages/constants/session_keys.php");
    include("../../packages/repository/auth_repository.php");

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
         * @return bool true if success | fals if not
         */
        public function login($request, $tableName){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $result = $this->findByEmailAndPassword(
                    $request, $tableName
                );

                if($result){
                    if (count($result) > 0) {
                        $this-> sessionManager-> set(SessionKeys::$USER_ID, $result['user_id']);
                        return true;
                    }
                }
                return false;
            } else {
                throw new Exception("Invalid Request Method", 400);
            }
        }


        /**
         * This method is
         * @param SignupRequest $request
         * @param string tableName
         */
        public function signup( $request, $tableName){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                
                $result = $this->findByEmail($request->getEmail(), $tableName);

                if ($result) {
                    return 'Account with this email already exist!!!';
                }else{
                    return $this->saveCustomer($request);
                }
            }
        }
    }
?>