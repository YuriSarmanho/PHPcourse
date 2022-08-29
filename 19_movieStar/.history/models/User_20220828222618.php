<?php

    class User {
        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $image;
        public $bio;
        public $token;

        public function generateToken() {
            return bin2hex(randon)
        }
    }


    interface UserDAOInterface {

        public function buildUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user);
        public function verifyToken($protected = false);
        public function setTokkenToSession($token , $redirect = true);
        public function authenticateUser($email, $password);
        public function findByEmail($email);
        public function findById($id);
        public function findByToken($token);
        public function changePassword(User $user);

    }

