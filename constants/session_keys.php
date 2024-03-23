<?php 

    /**
     * This class contains all the application session storage keys that'll be used
     * 
     */
    abstract class SessionKeys{
        
        // session storage key for user id
        public static $USER_ID = 'USER_ID';
        
        // session storage key for carts
        public static $CART = 'CART';
        
        // session storage key for user id
        public static $ERROR_MESSAGE = 'ERROR_MESSAGE';
    }

?>