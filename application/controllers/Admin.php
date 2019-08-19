<?php
class admin extends CI_Controller {
    public function login()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mail', 'メールアドレス', 'required', array('required' => '%s は必須です。'));
        $this->form_validation->set_rules('password', 'パスワード', 'required', array('required' => '%s は必須です。'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $this->load->helper('url');
            $mail = $this->input->post('mail');
            $password = $this->input->post('password');
            $this->Admin_model->add($mail, password);
            redirect('http://local.problem07.com/menber');               
        }
    }
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

