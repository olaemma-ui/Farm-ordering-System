<?php

include "../services/product_service.php";
include "../models/product_model.php";
include "../constants/session_keys.php";
include "../utils/session.php";

class OrderController extends BaseService
{

    private $orderService;
    private $session;

    public function __construct()
    {
        $this->orderService = new OrderService();
        $this->session = new SessionManager();
    }

    /**
     * 
     */

    public function getOrderById($orderId)
    {

        $response = array(
            'success' => true,
            'product' => $this->orderService->getOrderById($orderId)
        );
        echo json_encode($response);
    }

    /**
     * 
     */
    public function getAllOrders($user)
    {
        $response = array(
            'success' => true,
            'products' => $this->orderService->getAllOrders($user)
        );
        echo json_encode($response);
    }

    public function createOrder($orderModel)
    {
        $response = array(
            'success' => true,
            'isSuccess' => $this->orderService->createOrder($orderModel),
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
                $orderModel = new OrderModel(
                    $_POST['transactionId'],
                    $_POST['totalCost'],
                    $createdAt,
                    'PENDING',
                    $this->session->get(SessionKeys::$USER_ID),
                    $this->generateUuidV4(),
                    $_POST['address']
                );

                $this->createOrder($orderModel);
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
                        $this->getOrderById($_GET['orderId']);
                        break;
                    case "getAll":
                        $this->getAllOrders($this->session->get(SessionKeys::$USER_ID));
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
$orderController = new OrderController();
$orderController->init();
