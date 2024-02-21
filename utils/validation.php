<?php 

    
    /**
     * 
     * 
     */
    class ValidateFields{
        
        public $name_err = array();
        public $email_err = array();
        public $password_err = array();
      
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

        public function validate (){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
                
                // Password field validation
                if (isset($_POST["password"])) {
                    $this->errorMessage = 'Form validation error';
                    for ($i=0; $i < count($_POST["password"]); $i++) {
                        if (!empty($_POST["password"][$i])) {
                            if (strlen($_POST["password"][$i]) > 7) {
                                $regex = $this->sanitize($_POST["password"][$i]);
                                if (!preg_match("/^[a-zA-Z_ 0-9]/", $regex)) {
                                    $this-> password_err[$i] = "No special character ** [a-Z 0-9 _]";
                                }else{
                                    $this->errorMessage = null;
                                    $this->valid = true;
                                }
                            }else{
                                $this-> password_err[$i] = "8 letters above**";
                            }
                        }else{
                            $this-> password_err[$i] = "This field is required **";
                        }

                        $this-> password[$i] = $_POST["password"][$i];
                    }
                }

                // Name field validation
                if (isset($_POST["name"])) {
                    $this->errorMessage = 'Form validation error';
                    for ($i=0; $i < count($_POST["name"]); $i++) {
                      if (!empty($_POST["name"][$i])) {
              
                        $regex = $this->sanitize($_POST["name"][$i]);
                        if (!preg_match("/^[a-zA-Z]/", $regex)) {
                          $this-> name_err[$i] = "No special character ** [A-Z a-z]";
                        }else{
                            $this->errorMessage = null;
                            $this->valid = true;
                        }
              
                      }
                      else{
                        $this-> name_err[$i] = "This field is required **";
                      }
                      $this-> name[$i] = $_POST["name"][$i];
                    }
                }

                // Email field validation
                if (isset($_POST["email"])) {
                    $this->errorMessage = 'Form validation error';
                    for ($i=0; $i < count($_POST["email"]); $i++) {
                        if (!empty($_POST["email"][$i])) {
              
                            $regex = $this-> sanitize($_POST["email"][$i]);
                            if (!filter_var($_POST["email"][$i], FILTER_VALIDATE_EMAIL)) {
                                $this-> email_err[$i] = "Invalid E-mail address";
                            }else{
                                $this->errorMessage = null;
                                $this->valid = true;
                            }
                
                        }else{
                            $this-> email_err[$i] = "This field is required **";
                        }
                        $this-> email[$i] = $_POST["email"][$i];
                    }
                }

            }
        }
    }
?>