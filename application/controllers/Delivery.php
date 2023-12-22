<?php
defined('BASEPATH') or exit('No direct script access allowed');

class delivery extends CI_Controller
{

    public function index()
    {

        $sample_delivery_data = array(
            array(
                'noInvoice' => '87712',
                'noDelivery' => '313122',
                'tgl' =>'12/7/2023',
                'penanggung'=>'Udin',
                'pengirim'=>'cuya',
            ),
            array(
                'noInvoice' => '21312',
                'noDelivery' => '58686',
                'tgl' =>'12/7/2023',
                'penanggung'=>'Cuya',
                'pengirim'=>'Udin',
            ),
        ); 
        
        $sample_detail_delivery = array(
            array(
                'noInvoice' => '87712',
                'namabarang'=> 'lap muka',
                'jumlah'    => '20'
            ),
            array(
                'noInvoice' => '87712',
                'namabarang'=> 'lap tangan',
                'jumlah'    => '30',
            ),
            array(
                'noInvoice' => '21312',
                'namabarang'=> 'handuk Muka',
                'jumlah'    => '210'
            ),
            array(
                'noInvoice' => '21312',
                'namabarang'=> 'handuk tangan',
                'jumlah'    => '20',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - delivery',
            'is_login'  => false,
            'content'   => 'content/delivery/delivery_view',
            'extra'     => 'content/delivery/js/js_index',
            'delivery_data' => $sample_delivery_data,
            'detail_data' => $sample_detail_delivery,
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side18'         => 'active',
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
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side18'         => 'active',
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
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side18'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}