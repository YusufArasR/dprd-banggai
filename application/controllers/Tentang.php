<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Tentang DPRD Kabupaten Banggai Laut";

        $this->load->view('header', $data);
        $this->load->view('tentang');
        $this->load->view('footer');
    }
}
