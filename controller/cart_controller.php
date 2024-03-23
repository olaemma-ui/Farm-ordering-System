<?php

include "../models/cart_model.php";
include "../services/base_service.php";

class CartController extends BaseService {

    private $cartModel;

    public function __construct() {
        $this->cartModel = new CartModel();
    }

    /**
     * 
     */

    public function getCartItems() {
        
        $response = array(
            'success' => true,
            'cartItems' => $this->cartModel->getCartContents()
        );
        echo json_encode($response);
    }

    /**
     * 
     */
    public function addToCart (CartItemModel $cartItemModel){
        $response = array(
            'success' => true,
            'item' => $this->cartModel->addItem($cartItemModel)
        );
        echo json_encode($response);
    }


    public function removeItem($productId) {
        $response = array(
            'success' => true,
            'item' => $this->cartModel->removeItem($productId)
        );
        echo json_encode($response);
    }

    public function reduceQuantityFromCart($productId) {
        $response = array(
            'success' => true,
            'item' => $this->cartModel->reduceQuantityFromCart($productId)
        );
        echo json_encode($response);
    }

    public function getTotalCost() {
        $response = array(
            'success' => true,
            'totalCost' => $this->cartModel->getTotalCost()
         );
        echo json_encode($response);
    }

    public function init() {

        $action = $_POST['action'] ?? null;

        if (isset($action)) {

            switch ($action) {

                case "addToCart":
                    
                    // Create a model to be passed
                    $cartItemModel = new CartItemModel(
                        $_POST['productId'],
                        $_POST['productName'],
                        $_POST['productPicture'],
                        $_POST['price'],
                        $_POST['quantity'],
                        $_POST['category']
                    );
                    
                    $this->addToCart($cartItemModel);
                    break;

                case "removeFromCart":
                    $this->removeItem($_POST['productId']);
                    break;
                case "reduceQuantityFromCart":
                    $this->reduceQuantityFromCart($_POST['productId']);
                    break;
                case "total": 
                    $this->getTotalCost();
                    break;
                case "getCart":
                    $this->getCartItems();
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

// Initialize the controller class
$productController = new CartController();
$productController->init();