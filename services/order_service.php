<?php

include "../repository/order_repository.php";

class OrderService extends OrderRepository{

    /**
     * This method gets a product from the database
     * @param productId The id of the product
     * @return OrderModel the return type
     */
    public function getOrderById($orderId){
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $orderModel = $this->getOrderById_($orderId);

            if($orderModel){
                //returns the product model
                return $orderModel->toArray();
            }

            return null;

        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

    /**
     * This method gets all products from a category
     * @param userId The users id
     */
    public function getAllOrders($userId){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $result = $this->getAllOrders_($userId);

            if($result){
                return $result;
            }

            return null;
        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

    /**
     * @param OrderModel $orderModel
     */
    public function createOrder($orderModel){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->createOrder_($orderModel);

            return $result;

        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

}