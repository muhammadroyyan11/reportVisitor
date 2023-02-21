<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
        $this->load->model('Chart_model', 'chart');
    }

    public function index()
    {
        $x['title'] = "Dashboard";

        if (userdata('role') != 1) {
            $data['chart'] = $this->chart->chart_data(userdata('wisata_id'))->result();
            $data['total'] = $this->chart->chart_total(userdata('wisata_id'))->result();
            $x['wisata'] = $this->chart->chart_data(userdata('wisata_id'))->row();
        } else {
            $data['chart'] = $this->chart->chart_data()->result();
            $x['wisata'] = $this->chart->chart_data()->result();
        }

        $var1 = 0;
        $arr = [];

        foreach ($data['total'] as $key => $data) {
            if ($data->wisata_id == userdata('wisata_id')) {
                $var1 += $data->count;

                $params = (object) array(
                    'count' => $var1,
                    'golongan' => 'Total ',
                    'wisata_id' => $data->wisata_id
                );
            }
            array_push($arr, $params);
        }

        // foreach ($data['chart'] as $key => $data) {
        //     $params2 = (object) array(
        //         'count' => $data->count,
        //         'golongan' => $data->golongan,
        //         'wisata_id' => $data->wisata_id
        //     );
        // }

        var_dump($params);

        // $x['dewasa'] = json_encode($data['chart']);

        // var_dump($x['dewasa']);

        $this->template->load('template', 'dashboard/dashboard', $x, $data);
    }

    public function chart()
    {
        $data = $this->chart->chart(userdata('wisata_id'))->result();

        echo json_encode($data);
    }
}
