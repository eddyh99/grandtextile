<?php
defined('BASEPATH') or exit('No direct script access allowed');

class proses extends CI_Controller
{

    public function index()
    {

        $sample_proses_data = array(
            array(
                'nama' => 'Cuya',
                'tgl' => 'HP 1',
                'NoWo' =>'alamat 1',
                'estjadi'=>'20 agustus',
            ),
            array(
                'nama' => 'Cuya2',
                'tgl' => 'HP 2',
                'NoWo' =>'alamat 1',
                'estjadi'=>'22 agustus',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - proses',
            'is_login'  => false,
            'content'   => 'content/proses/proses_view',
            'extra'     => 'content/proses/js/js_index',
            'proses_data' => $sample_proses_data,
            'activeMenu'  => 'proses',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addproses()
    {

        $data = array(
            'title'     => NAMETITLE . ' - proses',
            'is_login'  => false,
            'content'   => 'content/proses/addproses_view',
            'extra'     => 'content/proses/js/js_index',
            'activeMenu'  => 'proses',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editproses()
    {

        $data = array(
            'title'     => NAMETITLE . ' - proses',
            'is_login'  => false,
            'content'   => 'content/proses/editproses_view',
            'extra'     => 'content/proses/js/js_index',
            'activeMenu'  => 'proses',
        );
        $this->load->view('layout/wrapper', $data);
    }

}