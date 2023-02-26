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

        if (userdata('role') == 1) {

            // WADUK DARMA 
            $data['chart_darma'] = $this->chart->chart_data(1)->result_array();
            $data['total_darma'] = $this->chart->chart_total(1)->result();
            $x['getDarma'] = $this->chart->chart_data(1)->row();

            $varDarma = 0;
            $arrDarma = null;

            foreach ($data['total_darma'] as $key => $datas) {

                $varDarma += $datas->count;

                $params = [
                    'count' => $varDarma,
                    'golongan' => 'Total',
                    'nama' => 'Total',
                    'wisata_id' => $datas->wisata_id
                ];

                $arrDarma = $params;
            }

            $data['chart_darma'][] = $arrDarma;


            $x['darma'] = json_encode($data['chart_darma']);
            // END DARMA 

            // BALONG CIGUGUR 
            $data['chart_cigugur'] = $this->chart->chart_data(2)->result_array();
            $data['total_cigugur'] = $this->chart->chart_total(2)->result();
            $x['getCigugur'] = $this->chart->chart_data(2)->row();

            $varCigugur = 0;
            $arrCigugur = null;

            foreach ($data['total_cigugur'] as $key => $datas) {

                $varCigugur += $datas->count;

                $params = [
                    'count' => $varCigugur,
                    'golongan' => 'Total',
                    'nama' => 'Total',
                    'wisata_id' => $datas->wisata_id
                ];

                $arrCigugur = $params;
            }

            $data['chart_cigugur'][] = $arrCigugur;


            $x['cigugur'] = json_encode($data['chart_cigugur']);

            // END BALONG CIGUGUR 

            // BALONG DALEM
            $data['chart_dalem'] = $this->chart->chart_data(3)->result_array();
            $data['total_dalem'] = $this->chart->chart_total(3)->result();
            $x['getDalem'] = $this->chart->chart_data(3)->row();

            $varDalem = 0;
            $arrDalem = null;

            foreach ($data['total_dalem'] as $key => $datas) {

                $varDalem += $datas->count;

                $params = [
                    'count' => $varDalem,
                    'golongan' => 'Total',
                    'nama' => 'Total',
                    'wisata_id' => $datas->wisata_id
                ];

                $arrDalem = $params;
            }

            $data['chart_dalem'][] = $arrDalem;


            $x['dalem'] = json_encode($data['chart_dalem']);
            // END BALONG DALEM

            // MONYET 
            $data['chart_monyet'] = $this->chart->chart_data(5)->result_array();
            $data['total_monyet'] = $this->chart->chart_total(5)->result();
            $x['getMonyet'] = $this->chart->chart_data(5)->row();

            $varMonyet = 0;
            $arrMonyet = null;

            foreach ($data['total_monyet'] as $key => $datas) {

                $varMonyet += $datas->count;

                $params = [
                    'count' => $varMonyet,
                    'golongan' => 'Total',
                    'nama' => 'Total',
                    'wisata_id' => $datas->wisata_id
                ];

                $arrMonyet = $params;
            }

            $data['chart_monyet'][] = $arrMonyet;


            $x['monyet'] = json_encode($data['chart_monyet']);
            // END MONYET

            // CIPANIIS 
            $data['chart_cipaniis'] = $this->chart->chart_data(6)->result_array();
            $data['total_cipaniis'] = $this->chart->chart_total(6)->result();
            $x['getCipaniis'] = $this->chart->chart_data(6)->row();

            $varcipaniis = 0;
            $arrcipaniis = null;

            foreach ($data['total_cipaniis'] as $key => $datas) {

                $varcipaniis += $datas->count;

                $params = [
                    'count' => $varcipaniis,
                    'golongan' => 'Total',
                    'nama' => 'Total',
                    'wisata_id' => $datas->wisata_id
                ];

                $arrcipaniis = $params;
            }

            $data['chart_cipaniis'][] = $arrcipaniis;


            $x['cipaniis'] = json_encode($data['chart_cipaniis']);
            // END CIPANIIS 

            // REMIS 
            $data['chart_remis'] = $this->chart->chart_data(7)->result_array();
            $data['total_remis'] = $this->chart->chart_total(7)->result();
            $x['getRemis'] = $this->chart->chart_data(7)->row();

            $varremis = 0;
            $arrremis = null;

            foreach ($data['total_remis'] as $key => $datas) {

                $varremis += $datas->count;

                $params = [
                    'count' => $varremis,
                    'golongan' => 'Total',
                    'nama' => 'Total',
                    'wisata_id' => $datas->wisata_id
                ];

                $arrremis = $params;
            }

            $data['chart_remis'][] = $arrremis;


            $x['remis'] = json_encode($data['chart_remis']);
            // END REMIS 

            // NILEM
            $data['chart_nilem'] = $this->chart->chart_data(8)->result_array();
            $data['total_nilem'] = $this->chart->chart_total(8)->result();
            $x['getNilem'] = $this->chart->chart_data(8)->row();

            $varnilem = 0;
            $arrnilem = null;

            foreach ($data['total_nilem'] as $key => $datas) {

                $varnilem += $datas->count;

                $params = [
                    'count' => $varnilem,
                    'golongan' => 'Total',
                    'nama' => 'Total',
                    'wisata_id' => $datas->wisata_id
                ];

                $arrnilem = $params;
            }

            $data['chart_nilem'][] = $arrnilem;


            $x['nilem'] = json_encode($data['chart_nilem']);
            // END NILEM
        } else {

            $data['chart'] = $this->chart->chart_data(userdata('wisata_id'))->result_array();
            $data['total'] = $this->chart->chart_total(userdata('wisata_id'))->result();
            $x['wisata'] = $this->chart->chart_data(userdata('wisata_id'))->row();

            $var1 = 0;
            $arr = null;

            foreach ($data['total'] as $key => $datas) {
                if ($datas->wisata_id == userdata('wisata_id')) {
                    $var1 += $datas->count;

                    $params = [
                        'count' => $var1,
                        'golongan' => 'Total',
                        'nama' => 'Total',
                        'wisata_id' => $datas->wisata_id
                    ];
                }

                $arr = $params;
            }

            $data['chart'][] = $arr;

            $x['dewasa'] = json_encode($data['chart']);
        }

        $this->template->load('template', 'dashboard/dashboard', $x, $data);
    }

    public function chart()
    {
        $data = $this->chart->chart(userdata('wisata_id'))->result();

        echo json_encode($data);
    }
}
