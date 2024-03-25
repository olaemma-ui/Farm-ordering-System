<?php

    class AddressModel {
        private $street;
        private $city;
        private $state;
        private $country;
        private $zipCode;
        private $addressId;
        private $address;
        private $createdAt;
        private $userId;
        private $category;

        public function __construct($street, $city, $state, $country, $zipCode, $address, $addressId, $createdAt, $userId, $category) {
            $this->street = $street;
            $this->city = $city;
            $this->state = $state;
            $this->country = $country;
            $this->zipCode = $zipCode;
            $this->address = $address;
            $this->addressId = $addressId;
            $this->createdAt = $createdAt;
            $this->userId = $userId;
            $this->category = $category;
        }

        public function getStreet() {
            return $this->street;
        }

        public function getCity() {
            return $this->city;
        }

        public function getState() {
            return $this->state;
        }

        public function getCountry() {
            return $this->country;
        }

        public function getZipCode() {
            return $this->zipCode;
        }

        public function getAddress() {
            return $this->address;
        }

        public function getAddressId() {
            return $this->addressId;
        }

        public function getCreatedAt() {
            return $this->createdAt;
        }

        public function getUserId() {
            return $this->userId;
        }

        public function getCategory() {
            return $this->category;
        }

        public function toArray() {
            return [
                'street' => $this->getStreet(),
                'city' => $this->getCity(),
                'state' => $this->getState(),
                'country' => $this->getCountry(),
                'zipCode' => $this->getZipCode(),
                'address' => $this->getAddress(),
                'addressId' => $this->getAddressId(),
                'createdAt' => $this->getCreatedAt(),
                'userId' => $this->getUserId(),
                'category' => $this->getCategory(),
            ];
        }
    }
