<?php
class users
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function login($email)
    {
        $query = $this->db->query("SELECT * FROM users WHERE email = '$email'");
        return $query->fetch();
    }
}