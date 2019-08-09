<?php
class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($mail, $password)
    {
        $this->db->query("INSERT INTO problem07.admins (mail, password) VALUES ('$mail', '$password');");  
    }
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

