<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data = array(
            'title' => 'Report visitor'
        );
        $this->template->load('template', 'report/view', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, true);
        
        $params = [
            'nama' => $post['destination'],
            'createdOn' => date('Y-m-d')
        ];

        $this->base->insert('wisata', $params);

        if ($this->db->affected_rows() > 0) {
            set_pesan('Data has ben saved!');
        } else {
            set_pesan('Data not saved, Please try again!', FALSE);
        }

        redirect('destination');
    }
  
}