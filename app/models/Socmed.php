<?php
    class Socmed{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getSocmed(){
            $this->db->query("SELECT * FROM socmed");

            return $this->db->resultSet();
        }
        
    }