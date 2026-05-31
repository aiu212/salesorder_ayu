<?php

class hello extends CI_Controller {

    public function index()
{
    $data['nama'] = "Ayu dari SIM 2";
    $this->load->view('hello_view',$data);
}
    public function namasaya()
{
    $data['nama'] = "Ayu dari SIM 2";
    $this->load->view('hello_view',$data);
}

}