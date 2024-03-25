
<?php 
    include  '../services/authentication_service.php';
    include  '..//utils/session.php';
    include  '../utils/validation.php';
    include '../value_object/signup_request.php';
    
    class SignupController {
        public function init() {
            $sessionManager = new SessionManager();
            $autheService = new AuthenticationService($sessionManager);
            $validationService = new ValidateFields();

             // maps the form to an object
            $sigUpnRequest  = new SignupRequest(
                $_POST['name'][0],
                $_POST['name'][1],
                $_POST['email'][0],
                $_POST['password'][0]
            );
            
            // Validates the fields in the login fields

            // Validate the fields in the login form
            $validationService->validate($sigUpnRequest);
            
            if ($validationService->valid) {
                $success = $autheService->signup($sigUpnRequest, 'customer');
                if ($success) {
                    // Create a response array
                    $response = array(
                        'success' => true,
                        'message' => 'Signup Successful',
                        'statusCode' => '00'
                    );
                } else {
                    // Create an error response for invalid login credentials
                    $response = array(
                        'success' => false,
                        'message' => 'Something went wrong',
                        'statusCode' => '96'
                    );
                }
            } else {
                // Create an error response for form validation errors
                $response = array(
                    'success' => false,
                    'message' => 'Form validation Error',
                    'statusCode' => '96'
                );
            }
        
            //Return the response as JSON
            echo json_encode($response);
        }
    }
    
    //Create an instance of SignupController and call the init method
    $controller = new SignupController();
    $controller->init();