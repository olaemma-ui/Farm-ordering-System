<?php

include "../repository/address_repo.php";

class AddressService extends AddressRepository{

    /**
     * This method gets a product from the database
     * @param addressId The id of the product
     * @return AddressModel the return type
     */
    public function getAddressById($addressId){
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $addressModel = $this->getAddressById_($addressId);

            if($addressModel){
                //returns the product model
                return $addressModel->toArray();
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
    public function getAllAddress($userId){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // echo 'userId = '. $userId . ' #######';
            $result = $this->getAllAddress_($userId);

            if($result){
                return $result;
            }

            return null;
        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

    /**
     * @param AddressModel $addressModel
     */
    public function createAddress(AddressModel $addressModel){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->createAddress_($addressModel);

            return $result;

        } else {
            throw new Exception("Invalid Request Method", 400);
        }
    }

}