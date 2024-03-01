<?php

include "../../packages/services/product_service.php";
include "../../packages/models/product_model.php";

class ProductController extends BaseService {

    private $productService;

    public function __construct() {
        $this->productService = new ProductService();
    }

    /**
     * 
     */

    public function getAProductById($productId) {
        
        $response = array(
            'product' => $this->productService->getAProductById_($productId)
        );
        echo json_encode($response);
    }

    /**
     * 
     */
    public function getProductByName ($name){
        $response = array(
            'products' => $this->productService->getProductByName($name)
        );
        echo json_encode($response);
    }


    public function getAllProductsInCategory($category) {
        $response = array(
            'products' => $this->productService->getAllProductsInCategory($category)
        );
        echo json_encode($response);
    }

    public function getAllProducts() {
        $response = array(
            'products' => $this->productService->getAllProducts()
         );
        echo json_encode($response);
    }


    public function createProduct($productModel) {
        $response = array(
            'isSuccess' => $this->productService->createProduct_($productModel),
        );
        echo json_encode($response);
    }

    public function init() {

        $action = $_GET['action'] ?? null;

        if (isset($action)) {

            switch ($action) {
                case "getById":
                    $this->getAProductById($_POST['productId']);
                    break;

                case "create":
                    //create neccessary fields
                    $createdAt=date("Y-m-d H:i:s");
                    $isAvailable=true;
                    $productPicture="some_url";

                    // Create a model to be passed
                    $productModel = new ProductModel(
                        productId: $this->generateUuidV4(),
                        productName: $_POST['productName'],
                        productDescription: $_POST['productDescription'],
                        productPrice: $_POST['productPrice'],
                        productPicture: $productPicture,
                        createdAt: $createdAt,
                        isAvailable: $isAvailable,
                        category: $_POST['productCategory']
                    );
                    
                    $this->createProduct($productModel);
                    break;

                case "getByCategory":
                    $this->getAllProductsInCategory($_POST['category']);
                    break;
                case "getByName": 
                    $this->getProductByName($_POST['productName']);
                    break;
                case "getAll":
                    $this->getAllProducts();
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
$productController = new ProductController();
$productController->init();