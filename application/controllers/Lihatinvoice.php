<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lihatinvoice extends CI_Controller
{

    public function index()
    {

        $sample_invoice_data = array(
            array(
                'noinvoice' => '91083180',
                'tanggal' => '12 Agustus',
                'keterangan' => 'lunas',
                'nominal' =>'90000',
                'dp'=>'30.000',
            ),
            array(
                'noinvoice' => '8271319731',
                'tanggal' => '18 Juni',
                'keterangan' => 'kredit',
                'nominal' =>'20.0000',
                'dp'=>'20.000',
            ),
        );
        $sample_detail_invoice = array(
            array(
                'noinvoice' => '91083180',
                'bayar'=>'1',
                'tbayar'=>'17 agustus',
                'tketerangan'=> 'DP',
                'tnominal' => '30.000'
            ),
            array(
                'noinvoice' => '91083180',
                'bayar'=>'2',
                'tbayar'=>'19 agustus',
                'tketerangan'=> 'Belum Lunas',
                'tnominal' => '20.000'
            ),
            array(
                'noinvoice' => '8271319731',
                'bayar'=>'1',
                'tbayar'=>'20 agustus',
                'tketerangan'=> 'DP',
                'tnominal' => '20.000'
            ),
            array(
                'noinvoice' => '8271319731',
                'bayar'=>'2',
                'tbayar'=>'27 agustus',
                'tketerangan'=> 'Belum Lunas',
                'tnominal' => '20.000'
            ),
        );
        $data = array(
            'title'     => NAMETITLE . ' - invoice',
            'is_login'  => false,
            'content'   => 'content/lihatinvoice/linvoice_view',
            'extra'     => 'content/lihatinvoice/js/js_index',
            'invoice_data' => $sample_invoice_data,
            'detail_data'   => $sample_detail_invoice,
            'coldash'        => 'show',
            'mendash'        => 'active',
            'side28'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}