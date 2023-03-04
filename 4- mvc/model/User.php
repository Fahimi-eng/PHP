<?php
    class User
    {
        public function __construct()
        {
            global $db;
            $this->db = $db;
        }

    }
?>