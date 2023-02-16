<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destination extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        // // $this->load->model('Auth_model', 'auth');
        // $this->load->model('Admin_model', 'admin');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data = array(
            'title' => 'Destination',
            'des' => $this->base->get('wisata')->result()
        );
        $this->template->load('template', 'destination/data', $data);
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
