<?php
defined('BASEPATH') or exit('No direct script access allowed');

class retailer extends CI_Controller
{

    public function index()
    {

        $sample_retailer_data = array(
            array(
                'nama' => 'Cuya',
                'kota' => 'Kota 1',
                'telp' => 'HP 1',
                'email' => 'email1@example.com',
                'alamat' =>'alamat 1',
            ),
            array(
                'nama' => 'Cuya2',
                'kota' => 'Kota 2',
                'telp' => 'HP 2',
                'email' => 'retailer',
                'alamat' =>'alamat 1',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - retailer',
            'is_login'  => false,
            'content'   => 'content/retailer/retailer_view',
            'extra'     => 'content/retailer/js/js_index',
            'retailer_data' => $sample_retailer_data,
            'activeMenu'  => 'retailer',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addretailer()
    {

        $data = array(
            'title'     => NAMETITLE . ' - retailer',
            'is_login'  => false,
            'content'   => 'content/retailer/addretailer_view',
            'extra'     => 'content/retailer/js/js_index',
            'activeMenu'  => 'retailer',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editretailer()
    {

        $data = array(
            'title'     => NAMETITLE . ' - retailer',
            'is_login'  => false,
            'content'   => 'content/retailer/editretailer_view',
            'extra'     => 'content/retailer/js/js_index',
            'activeMenu'  => 'retailer',
        );
        $this->load->view('layout/wrapper', $data);
    }

}