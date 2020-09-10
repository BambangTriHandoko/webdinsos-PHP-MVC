<?php

class visual{
 private $table = 'visual';
 private $db;

 public function __construct(){
     $this->db = new Database;
 }


public function getAllvisual(){
 
$this->db->query('SELECT * FROM ' . $this->table);
return $this->db->resultSet();
}
}