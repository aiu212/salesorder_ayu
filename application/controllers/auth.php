<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $username= $this->input->post('username');
        $password= $this->input->post('password');

        $users= $this->auth_model->cek_login($username, $password);

        if($users){
            $data=[
                'id_user'=> $users->id,
                'username'=> $users->username,
                'role'=> $users->role,
                'login'=> TRUE
            ];

            $this->session->set_userdata($data);

            $this->auth_model->update_last_login($users->id);
            redirect('dashboard');
        }else{
            $this->session->set_flashdata('error', 'Username dan password salah');
            redirect('login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}