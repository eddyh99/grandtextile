<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bahanbaku extends CI_Controller
{

    public function index()
    {

        $sample_bahanbaku_data = array(
            array(
                'bahanbaku' => 'Seminyak',
                'satuan' => '31',
                'konversi' => '2',
                'harga' => '1000',
                'tanggal' => '13',
            ),
            array(
                'bahanbaku' => 'kain',
                'satuan' => '1',
                'konversi' => '2',
                'harga' => '1000',
                'tanggal' => '13',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - bahanbaku',
            'is_login'  => false,
            'content'   => 'content/bahanbaku/bahanbaku_view',
            'extra'     => 'content/bahanbaku/js/js_index',
            'bahanbaku_data' => $sample_bahanbaku_data,
            'activeMenu'  => 'bahanbaku',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addbahanbaku()
    {
        $sample_bahanbaku_data = array(
            array(
                'bahanbaku' => 'Seminyak',
                'satuan' => '31',
                'konversi' => '2',
                'harga' => '1000',
                'tanggal' => '13',
            ),
            array(
                'bahanbaku' => 'kain',
                'satuan' => '1',
                'konversi' => '2',
                'harga' => '1000',
                'tanggal' => '13',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - bahanbaku',
            'is_login'  => false,
            'content'   => 'content/bahanbaku/addbahanbaku_view',
            'extra'     => 'content/bahanbaku/js/js_index',
            'activeMenu'  => 'bahanbaku',
            'bahanbaku_data' => $sample_bahanbaku_data,
        );
        $this->load->view('layout/wrapper', $data);
    } 
    public function editbahanbaku()
    {

        $data = array(
            'title'     => NAMETITLE . ' - bahanbaku',
            'is_login'  => false,
            'content'   => 'content/bahanbaku/editbahanbaku_view',
            'extra'     => 'content/bahanbaku/js/js_index',
            'activeMenu'  => 'bahanbaku',
        );
        $this->load->view('layout/wrapper', $data);
    }
}