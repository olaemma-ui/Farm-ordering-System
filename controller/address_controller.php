<?php

include "../models/address_model.php";
include "../constants/session_keys.php";
include "../utils/session.php";
include "../services/address_service.php";

class AddressController extends BaseService
{

    private $addressService;
    private $session;

    public function __construct()
    {
        $this->addressService = new AddressService();
        $this->session = new SessionManager();
    }

    /**
     * 
     */

    public function getAddressById($addressId)
    {

        $response = array(
            'success' => true,
            'address' => $this->addressService->getAddressById($addressId)
        );
        echo json_encode($response);
    }

    /**
     * 
     */
    public function getAllAddress($user)
    {
        // echo 'userId = '. $user . ' @@@@';
        $response = array(
            'success' => true,
            'addresses' => $this->addressService->getAllAddress($user)
        );
        echo json_encode($response);
    }

    public function createAddress(AddressModel $addressModel)
    {
        $response = array(
            'success' => true,
            'isSuccess' => $this->addressService->createAddress($addressModel),
        );
        echo json_encode($response);
    }

    public function init()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $action = $_POST['action'];

            if ($action == 'create') {
                //create neccessary fields
                $createdAt = date("Y-m-d H:i:s");

                // Create a model to be passed
                $addressModel = new AddressModel(
                    $_POST['street'],
                    $_POST['city'],
                    $_POST['state'],
                    $_POST['country'],
                    $_POST['zipCode'],
                    '',
                    $this->generateUuidV4(),
                    $createdAt,
                    $this->session->get(SessionKeys::$USER_ID),
                    $_POST['category']
                );

                $this->createAddress($addressModel);
            } else {
                $response = array(
                    "message" => "Invalid action",
                    "statusCode" => "96"
                );
                echo json_encode($response);
            }
        } else {

            $action = $_GET['action'] ?? null;

            if (isset($action)) {

                switch ($action) {
                    case "getById":
                        $this->getAddressById($_GET['addressId']);
                        break;
                    case "getAll":
                        $this->getAllAddress($this->session->get(SessionKeys::$USER_ID));
                        break;
                    default:
                        $response = array(
                            "message" => "Invalid action",
                            "statusCode" => "96"
                        );
                        echo json_encode($response);
                }
            } else {
                $response = array(
                    "message" => "Action is required",
                    "statusCode" => "96"
                );
                echo json_encode($response);
            }
        }
    }
}

// Initialize the controller class
$orderController = new AddressController();
$orderController->init();
