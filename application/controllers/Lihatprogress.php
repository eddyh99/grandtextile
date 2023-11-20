<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lihatprogress extends CI_Controller
{

    public function index()
    {

        $sample_pesanan_data = array(
            array(
                'noprogress' => '91083180',
                'tanggal' => '12 Agustus',
                'keterangan' => 'lunas',
                'nominal' =>'90000',
                'dp'=>'30.000',
            ),
            array(
                'noprogress' => '8271319731',
                'tanggal' => '18 Juni',
                'keterangan' => 'kredit',
                'nominal' =>'20.0000',
                'dp'=>'20.000',
            ),
        );
        $sample_detail_progress = array(
            array(
                'noprogress' => '91083180',
                'bayar'=>'1',
                'tbayar'=>'17 agustus',
                'tketerangan'=> 'DP',
                'tnominal' => '30.000'
            ),
            array(
                'noprogress' => '91083180',
                'bayar'=>'2',
                'tbayar'=>'19 agustus',
                'tketerangan'=> 'Belum Lunas',
                'tnominal' => '20.000'
            ),
            array(
                'noprogress' => '8271319731',
                'bayar'=>'1',
                'tbayar'=>'20 agustus',
                'tketerangan'=> 'DP',
                'tnominal' => '20.000'
            ),
            array(
                'noprogress' => '8271319731',
                'bayar'=>'2',
                'tbayar'=>'27 agustus',
                'tketerangan'=> 'Belum Lunas',
                'tnominal' => '20.000'
            ),
        );
        $data = array(
            'title'     => NAMETITLE . ' - pesanan',
            'is_login'  => false,
            'content'   => 'content/lihatprogress/lprogress_view',
            'extra'     => 'content/lihatprogress/js/js_index',
            'pesanan_data' => $sample_pesanan_data,
            'detail_data'   => $sample_detail_progress,
            'coldash'        => 'show',
            'mendash'        => 'active',
            'side29'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}