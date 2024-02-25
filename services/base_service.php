<?php 

    abstract class BaseService{
    
       /**
         * Custom UUID Generator (Version 4)
         * Generates a random UUID (Version 4) using openssl_random_pseudo_bytes.
         *
         * @return string Generated UUID (Version 4)
         */
        function generateUuidV4() {
            $data = openssl_random_pseudo_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // Set version to 4
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // Set variant to RFC 4122
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }

            
    }

?>