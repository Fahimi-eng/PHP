<?php

class migration
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function create_database($dbname)
    {
        try {
            $this->db->query("CREATE DATABASE $dbname");
            $filename = 'includes/config.php';
            $line = 5;
            $lines = file($filename , FILE_IGNORE_NEW_LINES);
            $lines[$line] = '$database = "' . $dbname . '";';
            file_put_contents($filename , implode('\n' , $lines));
            return true;
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function create_table($dbname)
    {
        try {
            $query[0] = "CREATE TABLE $dbname.users(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                firstname VARCHAR(255) NOT NULL ,
                lastname VARCHAR(255) NOT NULL ,
                email VARCHAR(255) UNIQUE ,
                mobile VARCHAR(255) UNIQUE ,
                password VARCHAR(255) ,
                address VARCHAR(255) ,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
                deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            $query[1] = "CREATE TABLE $dbname.contacts(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                creator INT(6) UNSIGNED ,
                firstname VARCHAR(255) NOT NULL ,
                lastname VARCHAR(255) NOT NULL ,
                email VARCHAR(255) UNIQUE ,
                mobile VARCHAR(255) UNIQUE ,
                password VARCHAR(255) ,
                address VARCHAR(255) ,
                pic VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
                deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            foreach ($query as $item)
            {
                $this->db->query($item);
            }
            echo "Table Created Successfully";
            return true;
        }
        catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}