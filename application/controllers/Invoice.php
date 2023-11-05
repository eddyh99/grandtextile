<?php
defined('BASEPATH') or exit('No direct script access allowed');

class invoice extends CI_Controller
{

    public function index()
    {

        $sample_invoice_data = array(
            array(
                'noinvoice' => 'Seminyak',
                'nominal' => '313322',
                'tanggal' => '31',
                'keterangan'=> 'Bayar',
                'dp'        => '20000',
            ),
            array(
                'noinvoice' => 'Nusa Dua',
                'nominal' => '221111',
                'tanggal' => '1',
                'keterangan'=> 'Bayar',
                'dp'        => '20000',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - invoice',
            'is_login'  => false,
            'content'   => 'content/invoice/invoice_view',
            'extra'     => 'content/invoice/js/js_index',
            'invoice_data' => $sample_invoice_data,
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side23'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addinvoice()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/invoice/addinvoice_view',
            'extra'     => 'content/invoice/js/js_index',
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side23'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    } 
    public function editinvoice()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/invoice/editinvoice_view',
            'extra'     => 'content/invoice/js/js_index',
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side23'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
}