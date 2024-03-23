<?php

    include("../models/cart_item_model.php");
    include("../utils/session.php");
    include("../constants/session_keys.php");

    class CartModel {
        private $items = []; // Associative array to store cart items (product ID => CartItemModel)
        private $session;

        public function __construct() {
            $this->session = new SessionManager();
            $this->items = $this->session->get(SessionKeys::$CART);
        }

        public function addItem(CartItemModel $item) {
            $productId = $item->getProductId();
            if (isset($this->items[$productId])) {

                // Item already exists, update quantity
                $this->items[$productId]->quantity += $item->getQuantity();

            } else {
                // Add new item
                $this->items[$productId] = $item;
            }

            $this->session->set(SessionKeys::$CART, $this->items);
        }
        
        public function removeItem($productId) {
            unset($this->items[$productId]);
            $this->session->set(SessionKeys::$CART, $this->items);
        }
        
        public function reduceQuantityFromCart($productId) {
            if (isset($this->items[$productId])) {
                // Item already exists, update quantity
                $this->items[$productId]->quantity = max(1, $this->items[$productId]->quantity -1);
                $this->session->set(SessionKeys::$CART, $this->items);
            }
        }

        public function getTotalCost() {
            $totalCost = 0;
            foreach ($this->items as $item) {
                $totalCost += $item->getTotalCost();
            }
            return $totalCost;
        }
        
        public function getCartContents() {
            return $this->items;
        }
    }
