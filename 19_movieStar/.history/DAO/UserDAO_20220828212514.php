<?php

require_once("models/User.php");

class UserDAO implements UserDAOInterface
{

    private $conn;
    private $url;

    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
    }

    public function buildUser($data)

    public function buildUser($data)
    {
    }
    public function create(User $user, $authUser = false)
    {
    }
    public function update(User $user)
    {
    }
    public function verifyToken($protected = false)
    {
    }
    public function setTokkenToSession($token, $redirect = true)
    {
    }
    public function authenticateUser($email, $password)
    {
    }
    public function findByEmail($email)
    {
    }
    public function findById($id)
    {
    }
    public function findByToken($token)
    {
    }
    public function changePassword(User $user)
    {
    }
}
