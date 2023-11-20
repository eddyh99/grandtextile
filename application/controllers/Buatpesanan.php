<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buatpesanan extends CI_Controller
{

    public function index()
    {

        $sample_pesanan_data = array(
            array(
                'nama' => 'Cuya',
                'status' => 'HP 1',
                'nopesanan' =>'31132',
                'tgl'=>'20 agustus',
            ),
            array(
                'nama' => 'Cuya2',
                'status' => 'HP 2',
                'nopesanan' =>'21211',
                'tgl'=>'22 agustus',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - pesanan',
            'is_login'  => false,
            'content'   => 'content/buatpesanan/pesanan_view',
            'extra'     => 'content/buatpesanan/js/js_index',
            'pesanan_data' => $sample_pesanan_data,
            'coldash'        => 'show',
            'mendash'        => 'active',
            'side26'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addpesanan()
    {

        $data = array(
            'title'     => NAMETITLE . ' - pesanan',
            'is_login'  => false,
            'content'   => 'content/buatpesanan/addpesanan_view',
            'extra'     => 'content/buatpesanan/js/js_index',
            'coldash'        => 'show',
            'mendash'        => 'active',
            'side26'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editpesanan()
    {

        $data = array(
            'title'     => NAMETITLE . ' - pesanan',
            'is_login'  => false,
            'content'   => 'content/pesanan/editpesanan_view',
            'extra'     => 'content/pesanan/js/js_index',
            'coldash'        => 'show',
            'mendash'        => 'active',
            'side26'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}