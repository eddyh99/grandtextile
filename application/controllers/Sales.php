<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sales extends CI_Controller
{

    public function index()
    {

        $sample_sales_data = array(
            array(
                'nama' => 'Cuya',
                'kota' => 'Kota 1',
                'hp' => 'HP 1',
                'area' => 'Barat',
                'komisi' => '10%',
                'alamat' => 'Cungkuk',
                'tanggal_lahir' => '10 Agustus 1997',
            ),
            array(
                'nama' => 'Aldi',
                'kota' => 'Kota 2',
                'hp' => 'HP 2',
                'area' => 'Timur',
                'komisi' => '20%',
                'alamat' => 'Ngestiharjo',
                'tanggal_lahir' => '12 Agustus 1990',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/sales/sales_view',
            'extra'     => 'content/sales/js/js_index',
            'sales_data' => $sample_sales_data,
            'activeMenu'  => 'sales',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addsales()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/sales/addsales_view',
            'extra'     => 'content/sales/js/js_index',
            'activeMenu'  => 'sales',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editsales()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/sales/editsales_view',
            'extra'     => 'content/sales/js/js_index',
            'activeMenu'  => 'sales',
        );
        $this->load->view('layout/wrapper', $data);
    }

}