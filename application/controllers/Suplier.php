<?php
defined('BASEPATH') or exit('No direct script access allowed');

class suplier extends CI_Controller
{

    public function index()
    {

        $sample_suplier_data = array(
            array(
                'namasup' => 'Cuya',
                'telp' => 'HP 1',
                'alamat' =>'alamat 1',
            ),
            array(
                'namasup' => 'Cuya2',
                'telp' => 'HP 2',
                'alamat' =>'alamat 1',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - suplier',
            'is_login'  => false,
            'content'   => 'content/suplier/suplier_view',
            'extra'     => 'content/suplier/js/js_index',
            'suplier_data' => $sample_suplier_data,
            'activeMenu'  => 'suplier',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addsuplier()
    {

        $data = array(
            'title'     => NAMETITLE . ' - suplier',
            'is_login'  => false,
            'content'   => 'content/suplier/addsuplier_view',
            'extra'     => 'content/suplier/js/js_index',
            'activeMenu'  => 'suplier',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editsuplier()
    {

        $data = array(
            'title'     => NAMETITLE . ' - suplier',
            'is_login'  => false,
            'content'   => 'content/suplier/editsuplier_view',
            'extra'     => 'content/suplier/js/js_index',
            'activeMenu'  => 'suplier',
        );
        $this->load->view('layout/wrapper', $data);
    }

}