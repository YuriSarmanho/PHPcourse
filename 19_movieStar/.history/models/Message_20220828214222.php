<?php

    class Message {
        private $url;

        public function __construct($url)
        {   
            $this->url = $url;
        }

        public function setMessage($msg, $type, $redirect = "index.php"){

            $_SESSION["msg"] = $msg;
            $_SESSION["type"] = $type;

            if($type )

        }
        public function getMessage(){

        }
        public function clearMessage(){

        }


    }