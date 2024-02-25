<?php 

    
    /**
     * 
     * 
     */
    class ValidateFields{
        
        public $name_err = array();
        public $email_err = array();
        public $password_err = array();
        public $phone_err = array();
      
        public $phone = array();
        public $password = array();
        public $name = array();
        public $email = array();

        public $valid = false;
        public $errorMessage;


        /**
         * @param data this is the data to be sanitized
         * This method sanitizes the passed value
         * @return string $data the value after being sanitized
         *  */ 
        private function sanitize ($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function validate ($request){

            $this->valid = false;
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
                $this->errorMessage = 'Form validation error';
            
                foreach ($request->get() as $key => $value) {   
                    $this->trigger($key);
                }

                if ($this->valid) {
                    unset($this->errorMessage);
                }
            }
        }
        
        /**
         * 
         * @param string $request this parameter is determines the level of validation
         * This method identifies the method to trigger for validation.
         */
        private function trigger ($request){
            switch ($request) {
                case 'email':
                    $this->emailValid();
                    break;
                
                case 'password':
                    $this->passwordValid();
                    break;
                
                case ('name' || 'firstname' || 'lastname'):
                    $this->nameValid();
                    break;
                
                case 'phone':
                    $this->phoneValid();
                    break;
                
                default: break;
            }
        }

        /**
         * 
         */
        private function passwordValid() {
            $password = $_POST['password'];
            for ($i=0; $i < count($password); $i++) {
                if (!empty($password[$i])) {
                    if (strlen($password[$i]) > 7) {
                        $regex = $this->sanitize($password[$i]);
                        if (!preg_match("/^[a-zA-Z_ 0-9]/", $regex)) {
                            $this-> password_err[$i] = "No special character ** [a-Z 0-9 _]";
                        }else $this->valid = true;
                    }else{
                        $this-> password_err[$i] = "8 letters above**";
                        $this->valid = true;
                    }
                }else{
                    $this-> password_err[$i] = "This field is required **";
                }

                $this-> password[$i] = $password[$i];
            }
        }

        /**
         * 
         */
        private function emailValid() {
            $email = $_POST['email'];
            for ($i=0; $i < count($email); $i++) {
                if (!empty($email[$i])) {
      
                    $email[$i] = $this-> sanitize($email[$i]);
                    if (!filter_var($email[$i], FILTER_VALIDATE_EMAIL)) {
                        $this-> email_err[$i] = "Invalid E-mail address";
                    }else $this->valid = true;
        
                }else{
                    $this-> email_err[$i] = "This field is required **";
                }
                $this-> email[$i] = $email[$i];
            }
        }

        /**
         * 
         */
        private function nameValid() { 
            $name = $_POST['name'];
            for ($i=0; $i < count($name); $i++) {
                if (!empty($name[$i])) {
      
                    $regex = $this->sanitize($name[$i]);
                    if (!preg_match("/^[a-zA-Z]/", $regex)) {
                        $this-> name_err[$i] = "No special character ** [A-Z a-z]";
                    }else $this->valid = true;
                }else{
                    $this-> name_err[$i] = "This field is required **";
                }
              $this-> name[$i] = $name[$i];
            }
        }

        /**
         * 
         */
        private function phoneValid() {
            $phone = $_POST['phone'];
            for ($i=0; $i < count($phone); $i++) {
              if (!empty($phone[$i])) {
      
                $regex = $this->sanitize($phone[$i]);
                if (!preg_match("/^[0-9]{,11}/", $regex)) {
                  $this-> phone_err[$i] = "Enter a valid mobile number";
                }else $this->valid = true;
                
                }
                else{
                    $this-> phone_err[$i] = "This field is required **";
                }
                $this-> phone[$i] = $phone[$i];
            }
        }
    

        
    }
?>