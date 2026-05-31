<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }

        if($this->session->userdata('role') != 'admin' &&
            $this->session->userdata('role') != 'manager'
        ){
            redirect('dashboard');
        }

        $this->load->model('M_laporan');
    }

    public function index()
    {
        $data['laporan'] = $this->M_laporan->get_laporan();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $data['laporan'] = $this->M_laporan->get_laporan();

        $this->load->view('laporan/cetak', $data);
    }
}