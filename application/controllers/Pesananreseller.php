<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pesananreseller extends CI_Controller
{

    public function index()
    {

        $sample_pesananreseller_data = array(
            array(
                'nama' => 'Cuya',
                'nopesanan' => 'HP 1',
                'tgl' =>'alamat 1',
            ),
            array(
                'nama' => 'Cuya2',
                'nopesanan' => 'HP 2',
                'tgl' =>'alamat 1',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - pesananreseller',
            'is_login'  => false,
            'content'   => 'content/pesananreseller/pesananreseller_view',
            'extra'     => 'content/pesananreseller/js/js_index',
            'pesananreseller_data' => $sample_pesananreseller_data,
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side20'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addpesananreseller()
    {

        $data = array(
            'title'     => NAMETITLE . ' - pesananreseller',
            'is_login'  => false,
            'content'   => 'content/pesananreseller/addpesananreseller_view',
            'extra'     => 'content/pesananreseller/js/js_index',
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side20'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editpesananreseller()
    {

        $data = array(
            'title'     => NAMETITLE . ' - pesananreseller',
            'is_login'  => false,
            'content'   => 'content/pesananreseller/editpesananreseller_view',
            'extra'     => 'content/pesananreseller/js/js_index',
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side20'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}