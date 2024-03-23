<?php


    class CartItemModel {
        public $productId;
        public $productName;
        public $productPicture;
        public $price;
        public $quantity;
        public $category;

        public function __construct(
             $productId, 
             $productName, 
             $productPicture, 
             $price, 
             $quantity,
             $category
        ) {
            $this->productId = $productId;
            $this->productName = $productName;
            $this->productPicture = $productPicture;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->category = $category;
        }

        public function getProductId(): string{
            return $this->productId;
        }

        public function getCategory(): string{
            return $this->category;
        }

        public function getProductName(): string {
            return $this->productName;
        }

        public function getPrice(): float {
            return $this->price;
        }

        public function getQuantity(): int {
            return $this->quantity;
        }

        public function getProductPicture(): string {
            return $this->productPicture;
        }

        public function getTotalCost(): float {
            return $this->price * $this->quantity;
        }

        public function toArray(): array {
            return [
                "productId"=> $this->getProductId(),
                "productName"=> $this->getProductName(),
                "productPicture"=> $this->getProductPicture(),
                "price"=> $this->getPrice(),
                "quantity"=> $this->getQuantity(),
                "totalCost"=> $this->getTotalCost(),
                "category"=> $this->getCategory()
            ];
        }
    }