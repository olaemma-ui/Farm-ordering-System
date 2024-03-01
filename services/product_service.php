<?php

include "../../packages/repository/product_repository.php";

class ProductService extends ProductRepository{

    /**
     * This method gets a product from the database
     * @param productId The id of the product
     * @return ProductModel the return type
     */
    public function getAProductById_($productId){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $productModel = $this->getProductById(
                $productId
            );

            if($productModel){
               
                //returns the product model
                return $productModel->toArray();
            }

            return null;

        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

    /**
     * This method gets all products from a category
     * @param category The product category
     */
    public function getAllProductsInCategory_($category){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->getAllProductsInCategory(
                $category
            );

            if($result){
                
                if (count($result) > 0) {
                    $result;
                }
            }

            return null;
        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

     /**
     * This method gets all products
     */
    public function getAllProducts_(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->getAllProducts();

            if($result){
                
                if (count($result) > 0) {
                    $result;
                }
            }

            return null;
        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

     /**
     * This method gets all products that has similar names
     * @param string #$name -The product name
     */
    public function getProductByName_($name){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->getProductByName(
                $name
            );

            if($result){
                
                if (count($result) > 0) {
                    $result;
                }
            }

            return null;
        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }


    /**
     * 
     */
    public function createProduct_($productModel){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->createProduct(
                $productModel
            );

            return $result;

        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

}