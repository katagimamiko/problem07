<?php
class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($mail, $password)
    {
        $this->db->query("INSERT INTO problem07.admins (mail, password) VALUES ('$mail', '$password');");  
    }
    public function getByMail($mail)
    {
        $query = $this->db->query("select * from problem07.admins where id = {$mail};");
        return $query->row_array();  
    }    
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

