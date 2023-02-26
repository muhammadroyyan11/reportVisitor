<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {

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
            'title' => 'Input Visitor',
            'row' => $this->base->get('wisata', ['id_wisata' => userdata('wisata_id')])->row()
        );

        $this->template->load('template', 'visitor/input', $data);
	}

    public function proses()
    {
        $post = $this->input->post(null, true);

        if ($post['dewasa'] != null) {
            $params = array(
                'jumlah' => $post['dewasa'],
                'golongan' => 'Dewasa',
                'dateTime' => date("Y-m-d h:i:s"),
                'wisata_id' => userdata('wisata_id')
            );

            $this->base->insert('pengunjung', $params);
        }

        if ($post['anak'] != null) {
            $params = array(
                'jumlah' => $post['anak'],
                'golongan' => 'Anak',
                'dateTime' => date("Y-m-d h:i:s"),
                'wisata_id' => userdata('wisata_id')
            );

            $this->base->insert('pengunjung', $params);
        }

       if ($this->db->affected_rows() > 0) {
            set_pesan('Data saved');
       } else {
            set_pesan('Failed to saved');
       }

       redirect('visitor');
    }
}
