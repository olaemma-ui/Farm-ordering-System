<?php 
    /**
     * This class manages the application session
     
     */
    class SessionManager {
        
        public function __construct() {
            if (session_status() == PHP_SESSION_NONE) 
                session_start(); // Start the session
        }

        /**
         * Set a session variable
         *
         * @param string $key
         * @param mixed $value
         */
        public function set($key, $value) {
            $_SESSION[$key] = $value;
        }

        /**
         * Get a session variable
         *
         * @param string $key
         * @return mixed|null
         */
        public function get($key) {
            return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
        }

        /**
         * Check if a session variable exists
         *
         * @param string $key
         * @return bool if the key exists in the session stotage
         */
        public function has($key) {
            return isset($_SESSION[$key]);
        }

        /**
         * Remove a session variable
         *
         * @param string $key
         */
        public function remove($key) {
            unset($_SESSION[$key]);
        }

        /**
         * Destroy the session
         */
        public function destroy() {
            session_destroy();
        }
    }
?>