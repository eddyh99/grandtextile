<?php
defined('BASEPATH') or exit('No direct script access allowed');

class stok extends CI_Controller
{

    public function index()
    {

        $sample_stok_data = array(
            array(
                'nambahan' => 'Seminyak',
                'stok' => '31',
            ),
            array(
                'nambahan' => 'kain',
                'stok' => '1',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - stok',
            'is_login'  => false,
            'content'   => 'content/stok/stok_view',
            'extra'     => 'content/stok/js/js_index',
            'stok_data' => $sample_stok_data,
            'activeMenu'  => 'stok',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addstok()
    {
        $sample_stok_data = array(
            array(
                'stok' => 'Seminyak',
                'satuan' => '31',
                'konversi' => '2',
                'harga' => '1000',
                'tanggal' => '13',
            ),
            array(
                'stok' => 'kain',
                'satuan' => '1',
                'konversi' => '2',
                'harga' => '1000',
                'tanggal' => '13',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - stok',
            'is_login'  => false,
            'content'   => 'content/stok/addstok_view',
            'extra'     => 'content/stok/js/js_index',
            'activeMenu'  => 'stok',
            'stok_data' => $sample_stok_data,
        );
        $this->load->view('layout/wrapper', $data);
    } 
    public function editstok()
    {

        $data = array(
            'title'     => NAMETITLE . ' - stok',
            'is_login'  => false,
            'content'   => 'content/stok/editstok_view',
            'extra'     => 'content/stok/js/js_index',
            'activeMenu'  => 'stok',
        );
        $this->load->view('layout/wrapper', $data);
    }
}