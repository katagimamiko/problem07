<?php
class Member extends CI_Controller {

        public function index() 
        {
            $members = $this->Member_model->getList();
            $data = [
                'members' => $members
            ]; 
            $this->load->view('index', $data);
        }
        public function add() 
        {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('lastname', '氏', 'required', array('required' => '%s は必須です。'));
            $this->form_validation->set_rules('firstname', '名', 'required', array('required' => '%s は必須です。'));
            $this->form_validation->set_rules('year', '年', 'required', array('required' => '%s は必須です。'));
            $this->form_validation->set_rules('month', '月', 'required', array('required' => '%s は必須です。'));
            $this->form_validation->set_rules('day', '日', 'required', array('required' => '%s は必須です。'));
            $this->form_validation->set_rules('home', '出身地', 'required', array('required' => '%s は必須です。'));
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('add');
            } else {
                $this->load->helper('url');
                $lastname = $this->input->post('lastname');
                $firstname = $this->input->post('firstname');
                $birthday = $this->input->post('year'). '-'. $this->input->post('month'). '-'. $this->input->post('day');
                $home = $this->input->post('home');
                $this->Member_model->add($lastname, $firstname, $birthday, $home);
//              $this->db->query("INSERT INTO problem07.members (last_name, first_name, birthday, home) VALUES ('$lastname', '$firstname', '$birthday', '$home');");  
                redirect('http://local.problem07.com/member/add');                
            }
        }
        public function update($id)
        {        
            if ($this->input->method() == 'get') {
//              $query = $this->db->query("select * from problem07.members where id = {$id};");
//              $member = $query->row_array();
                $member = $this->Member_model->getMember($id);
                $data = [
                    'id' => $id,
                    'member' => $member
                ];   
                $this->load->view('update', $data);
            } elseif ($this->input->method() == 'post') {
                $this->load->helper('url');
                $id = $this->input->post('id');
                $lastname = $this->input->post('lastname');
                $firstname = $this->input->post('firstname');
                $birthday = $this->input->post('year'). '-'. $this->input->post('month'). '-'. $this->input->post('day');
                $home = $this->input->post('home');
                $this->Member_model->update($id, $lastname, $firstname, $birthday, $home);
//              $this->db->query("UPDATE problem07.members SET last_name = '$lastname', first_name = '$firstname', birthday = '$birthday', home = '$home' WHERE id = '$id'");
                redirect('http://local.problem07.com/member');               
            }
        }
        public function delete($id)
        {
            $this->load->helper('url');
            $this->Member_model->delete($id);
//            $this->db->query("UPDATE members SET deleted_at = 1 WHERE id = '{$id}';");
            redirect('http://local.problem07.com/member');              
        }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

