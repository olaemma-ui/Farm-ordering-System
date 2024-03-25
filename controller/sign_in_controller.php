
<?php 
    include  '../services/authentication_service.php';
    include  '../utils/session.php';
    include  '../utils/validation.php';
    include '../value_object/signin_request.php';
    
    class SigninController {

        public function init() {

        
            $sessionManager = new SessionManager();
            $autheService = new AuthenticationService($sessionManager);
            $validationService = new ValidateFields();

            // Map the form data to an object
            $signinRequest = new SigninRequest($_POST['email'][0], $_POST['password'][0]);

            // Validate the fields in the login form
            $validationService->validate($signinRequest);

            if ($validationService->valid) {
                $isLoggedIn = $autheService->login($signinRequest, 'customer');
                if ($isLoggedIn['isLogedIn']) {

                    // Create a response array
                    $response = array(
                        'success' => true,
                        'message' => 'Login Successful',
                        'statusCode' => '00',
                        'data' => $isLoggedIn['data']
                    );
                } else {

                    // Create an error response for invalid login credentials
                    $response = array(
                        'success' => false,
                        'message' => 'Invalid Login credentials',
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

            // Return the response as JSON
            echo json_encode($response);
        }
    }

    //initialize the controller class
    $signInController=new SigninController();
    $signInController->init();
