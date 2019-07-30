<?php
class Member extends CI_Controller {

        public function index() 
        {
            $query = $this->db->query("SELECT * FROM problem07.members WHERE 削除 = 0;");
            $members = $query->result_array();
            $data = [
                'members' => $members
            ]; 
            $this->load->view('index', $data);
        }
        public function add() 
        {
            $this->load->view('add');
        }
        public function add_submit() 
        {
            $this->load->helper('url');
            $lastname = $this->input->post('lastname');
            $firstname = $this->input->post('firstname');
            $birthday = $this->input->post('year'). '-'. $this->input->post('month'). '-'. $this->input->post('day');
            $home = $this->input->post('home');
            $this->db->query("INSERT INTO problem07.members (氏, 名, 生年月日, 出身) VALUES ('$lastname', '$firstname', '$birthday', '$home');");  
            redirect('http://local.problem07.com/member/add');
        }
        public function update($id) 
        {        
            $query = $this->db->query("select * from problem07.members where ID = {$id};");
            $member = $query->row_array();
            $data = [
                'id' => $id,
                'member' => $member
            ];   
            $this->load->view('update', $data);
        }
        public function update_submit()
        {
            $this->load->helper('url');
            $id = $this->input->post('id');
            $lastname = $this->input->post('lastname');
            $firstname = $this->input->post('firstname');
            $birthday = $this->input->post('year'). '-'. $this->input->post('month'). '-'. $this->input->post('day');
            $home = $this->input->post('home');
            $this->db->query("UPDATE problem07.members SET 氏 = '$lastname', 名 = '$firstname', 生年月日 = '$birthday', 出身 = '$home' WHERE ID = '$id'");
            redirect('http://local.problem07.com/member');
        }
        public function delete($id)
        {
            $this->load->helper('url');
            $this->db->query("UPDATE members SET 削除 = 1 WHERE ID = '{$id}';");
            redirect('http://local.problem07.com/member');              
        }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

