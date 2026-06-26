<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_aset');
    }

    public function index() {
        $data['title'] = 'Laporan Inventaris Aset Instansi';
        $data['aset'] = $this->M_aset->get_all_aset();

        $this->load->view('templates/v_header', $data);
        $this->load->view('v_inventaris_aset', $data);
        $this->load->view('templates/v_footer');
    }
}