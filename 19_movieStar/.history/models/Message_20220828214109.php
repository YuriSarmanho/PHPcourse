<?php

    class Message {
        private $url;

        public function __construct($url)
        {   
            $this->url = $url;
        }

        public function setMessage($msg, $type, $redirect = "index.php"){
            $_SESSION["msg"]
        }
        public function getMessage(){

        }
        public function clearMessage(){

        }


    }