<?php
defined('BASEPATH') or exit('No direct script access allowed');

class delivery extends CI_Controller
{

    public function index()
    {

        $sample_delivery_data = array(
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
            'title'     => NAMETITLE . ' - delivery',
            'is_login'  => false,
            'content'   => 'content/delivery/delivery_view',
            'extra'     => 'content/delivery/js/js_index',
            'delivery_data' => $sample_delivery_data,
            'activeMenu'  => 'delivery',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function adddelivery()
    {

        $data = array(
            'title'     => NAMETITLE . ' - delivery',
            'is_login'  => false,
            'content'   => 'content/delivery/adddelivery_view',
            'extra'     => 'content/delivery/js/js_index',
            'activeMenu'  => 'delivery',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editdelivery()
    {

        $data = array(
            'title'     => NAMETITLE . ' - delivery',
            'is_login'  => false,
            'content'   => 'content/delivery/editdelivery_view',
            'extra'     => 'content/delivery/js/js_index',
            'activeMenu'  => 'delivery',
        );
        $this->load->view('layout/wrapper', $data);
    }

}