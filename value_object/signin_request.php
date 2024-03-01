

<?php 

    class SigninRequest {
        
        private $email;

        private $password;

        public function __construct( $email, $password ) {
            $this->email = $email;
            $this->password = $password;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            return $this->password;
        }
        
        public function get() {
            return array("email"=> $this->email,"password"=> $this->password );
        }

        public function toString() {
            return "Email: " . $this->email . ", Password: " . $this->password;
        }
    }
?>