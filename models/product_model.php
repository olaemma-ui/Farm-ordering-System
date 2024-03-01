<?php

class ProductModel {
    private $productId;
    private $productName;
    private $productDescription;
    private $productPrice;
    private $productPicture;
    private $createdAt;
    private $isAvailable;
    private $category;

    public function __construct(
        $productId,
        $productName,
        $productDescription,
        $productPrice,
        $productPicture,
        $createdAt,
        $isAvailable,
        $category
    ) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->productPrice = $productPrice;
        $this->productPicture = $productPicture;
        $this->createdAt = $createdAt;
        $this->isAvailable = $isAvailable;
        $this->category=$category;
    }

    // Getters and setters
    public function getProductId() {
        return $this->productId;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getProductName() {
        return $this->productName; 
    }

    public function getProductDescription() {
        return $this->productDescription;
    }

    public function getProductPrice() {
        return $this->productPrice;
    }

    public function getProductPicture() {
        return $this->productPicture;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function isAvailable() {
        return $this->isAvailable;
    }
    
    public function get() {
        return array(
            "id"=> $this->productId,
            "productName"=> $this->productName,
            "productDescription"=> $this->productDescription,
            "productPrice"=> $this->productPrice,
            "productPicture"=> $this->productPicture,
            "createdAt"=> $this->createdAt,
            "isAvailable"=> $this->isAvailable,
            "category"=> $this->category
        );
    }

    /**
     * This method was created to ensure easy serialization
     * to Json
     */
    public function toArray() {
        return array(
            "productId" => $this->productId,
            "productName" => $this->productName,
            "productDescription" => $this->productDescription,
            "productPrice" => $this->productPrice,
            "productPicture" => $this->productPicture,
            "createdAt" => $this->createdAt,
            "isAvailable" => $this->isAvailable,
            "category" => $this->category
        );
    }
}
?>
