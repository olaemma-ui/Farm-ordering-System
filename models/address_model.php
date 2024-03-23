<?php

    class AddressDTO {
        private $street;
        private $city;
        private $state;
        private $country;
        private $zipCode;

        public function __construct($street, $city, $state, $country, $zipCode) {
            $this->street = $street;
            $this->city = $city;
            $this->state = $state;
            $this->country = $country;
            $this->zipCode = $zipCode;
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

        public function toArray() {
            return [
                'street' => $this->getStreet(),
                'city' => $this->getCity(),
                'state' => $this->getState(),
                'country' => $this->getCountry(),
                'zipCode' => $this->getZipCode(),
            ];
        }
    }
