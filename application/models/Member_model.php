<?php
class Member_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 社員一覧を取得する
     * @return array 社員一覧
     */
    public function getList()
    {
        $query = $this->db->query("SELECT * FROM problem07.members WHERE deleted_at = 0;");
        return $query->result_array();
    }
    public function add($lastname, $firstname, $birthday, $home)
    {
        $this->db->query("INSERT INTO problem07.members (last_name, first_name, birthday, home) VALUES ('$lastname', '$firstname', '$birthday', '$home');");  
    }
    public function update($id, $lastname, $firstname, $birthday, $home)
    {
        $this->db->query("UPDATE problem07.members SET last_name = '$lastname', first_name = '$firstname', birthday = '$birthday', home = '$home' WHERE id = '$id'");
    } 
    public function getMember($id)
    {
        $query = $this->db->query("select * from problem07.members where id = {$id};");
        return $query->row_array();        
    }     
    public function delete($id)
    {
        $this->db->query("UPDATE members SET deleted_at = 1 WHERE id = '{$id}';");
    }     
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

