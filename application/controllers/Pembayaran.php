<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{

    public function index()
    {

        $sample_pembayaran_data = array(
            array(
                'noinvoice' => 'Cuya',
                'tgl' => 'HP 1',
                'nominal' =>'alamat 1',
                'keterangan'=>'20 agustus',
                'dp'    => '20000'
            ),
            array(
                'noinvoice' => 'Cuya2',
                'tgl' => 'HP2',
                'nominal' =>'alamat 2',
                'keterangan'=>'20 agustus',
                'dp'    => '20000'
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - pembayaran',
            'is_login'  => false,
            'content'   => 'content/pembayaran/pembayaran_view',
            'extra'     => 'content/pembayaran/js/js_index',
            'pembayaran_data' => $sample_pembayaran_data,
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side19'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addpembayaran()
    {

        $data = array(
            'title'     => NAMETITLE . ' - pembayaran',
            'is_login'  => false,
            'content'   => 'content/pembayaran/addpembayaran_view',
            'extra'     => 'content/pembayaran/js/js_index',
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side19'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editpembayaran()
    {

        $data = array(
            'title'     => NAMETITLE . ' - pembayaran',
            'is_login'  => false,
            'content'   => 'content/pembayaran/editpembayaran_view',
            'extra'     => 'content/pembayaran/js/js_index',
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side19'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}