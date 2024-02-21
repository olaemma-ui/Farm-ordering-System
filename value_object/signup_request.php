<?php 
    
    /**
     * 
     * 
     */
    class SignupRequest{
       
        private $firstname;
        
        private $lastname; 
       
        private $email; 

        private $password;  


        public function __construct( $firstname, $lastname, $email, $password ) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
        }

        public function getFirstname() {
            return $this->firstname;
        }

        public function getLastname() {
            return $this->lastname;
        }

        public function getEmail() {
            return $this->email;
        }


        public function getPassword() {
            return $this->password;
        }

        public function get() {
            return array(
                        "email"=> $this->email, 
                        "password"=> $this->password, 
                        "lastname"=> $this->firstname, 
                        "lastname"=> $this->lastname
                    );
        }
    }
    
?>