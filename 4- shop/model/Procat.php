<?php
    class procat
    {
        public function __construct()
        {
            global $db;
            $this->db = $db;
        }

        public function all()
        {
            return $this->db->query("SELECT * FROM procat_tbl");
        }

        public function get_procats_where_chid_0()
        {
            return $this->db->query("SELECT * FROM procat_tbl WHERE chid=0");
        }

        public function insert($title , $chid)
        {
            return $this->db->query("INSERT INTO procat_tbl (title,chid) VALUES ('$title' , '$chid')");
        }

        public function delete($id)
        {
            return $this->db->query("DELETE FROM procat_tbl WHERE id=$id");
        }

        public function get($id)
        {
            return $this->db->query("SELECT * FROM procat_tbl WHERE id = $id")->fetch();
        }

        public function update($id , $title , $chid)
        {
            return $this->db->query("UPDATE procat_tbl SET title='$title', chid = $chid WHERE id = $id ");
        }
    }
?>