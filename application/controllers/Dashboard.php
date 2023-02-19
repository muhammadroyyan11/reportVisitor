<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        // // $this->load->model('Auth_model', 'auth');
        // $this->load->model('Admin_model', 'admin');
        $this->load->model('Base_model', 'base');
        $this->load->model('Chart_model', 'chart');
    }

    public function index()
    {
        $x['title'] = "Dashboard";

        if (userdata('role') != 1) {
            $data['chart'] = $this->chart->chart_data(userdata('wisata_id'))->result();
            $x['wisata'] = $this->chart->chart_data(userdata('wisata_id'))->row();

        } else {
            $data['chart'] = $this->chart->chart_data()->result();
            $x['wisata'] = $this->chart->chart_data()->result();
        }
        $x['dewasa'] = json_encode($data['chart']);

        $this->template->load('template', 'dashboard/dashboard', $x, $data);
    }


    public function chart()
    {
        $data = $this->chart->chart(userdata('wisata_id'))->result();

        echo json_encode($data);
    }
}
