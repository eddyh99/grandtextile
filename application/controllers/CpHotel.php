<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cphotel extends CI_Controller
{

    public function index()
    {

        $sample_cphotel_data = array(
            array(
                'nama' => 'Cuya',
                'kota' => 'Kota 1',
                'hp' => 'HP 1',
                'komisi' => '10%',
                'alamat' => 'Cungkuk',
                'tanggal_lahir' => '10 Agustus 1997',
            ),
            array(
                'nama' => 'Aldi',
                'kota' => 'Kota 2',
                'hp' => 'HP 2',
                'komisi' => '20%',
                'alamat' => 'Ngestiharjo',
                'tanggal_lahir' => '12 Agustus 1990',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - Reseller',
            'is_login'  => false,
            'content'   => 'content/cphotel/cphotel_view',
            'extra'     => 'content/cphotel/js/js_index',
            'cphotel_data' => $sample_cphotel_data,
            'activeMenu'  => 'cphotel',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addcphotel()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/cphotel/addcphotel_view',
            'extra'     => 'content/cphotel/js/js_index',
            'activeMenu'  => 'cphotel',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editcphotel()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/cphotel/editcphotel_view',
            'extra'     => 'content/cphotel/js/js_index',
            'activeMenu'  => 'cphotel',
        );
        $this->load->view('layout/wrapper', $data);
    }

}