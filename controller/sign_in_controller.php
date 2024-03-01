
<?php 
    include  '../../packages/services/auth/authentication_service.php';
    include  '../../packages/utils/session.php';
    include  '../../packages/utils/validation.php';
    include '../../packages/value_object/signin_request.php';
    
    class SigninController {

        public function init() {

            if (isset($_GET['tableName'])) {
                $sessionManager = new SessionManager();
            $autheService = new AuthenticationService($sessionManager);
            $validationService = new ValidateFields();

            // Map the form data to an object
            $signinRequest = new SigninRequest($_POST['email'][0], $_POST['password'][0]);

            // Validate the fields in the login form
            $validationService->validate($signinRequest);

            if ($validationService->valid) {
                $isLoggedIn = $autheService->login($signinRequest, $_GET['tableName']);
                if ($isLoggedIn) {

                    // Create a response array
                    $response = array(
                        'success' => true,
                        'message' => 'Login Successful',
                        'statusCode' => '00'
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
            }}
            else{
                $response = array(
                    "success" => false,
                    "message" => "Table name required params",
                    "statusCode" => "96"
                );
            }
        
            // Return the response as JSON
            echo json_encode($response);
        }
    }

    //initialize the controller class
    $signInController=new SigninController();
    $signInController->init();
    
?>