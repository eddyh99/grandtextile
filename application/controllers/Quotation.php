<?php
defined('BASEPATH') or exit('No direct script access allowed');

class quotation extends CI_Controller
{

    public function index()
    {

        $sample_quotation_data = array(
            array(
                'quotation' => 'Seminyak',
                'noquota' => '31',
                'tanggal' => '31',
            ),
            array(
                'quotation' => 'Nusa Dua',
                'noquota' => '2',
                'tanggal' => '1',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - quotation',
            'is_login'  => false,
            'content'   => 'content/quotation/quotation_view',
            'extra'     => 'content/quotation/js/js_index',
            'quotation_data' => $sample_quotation_data,
            'activeMenu'  => 'quotation',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addquotation()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/quotation/addquotation_view',
            'extra'     => 'content/quotation/js/js_index',
            'activeMenu'  => 'quotation',
        );
        $this->load->view('layout/wrapper', $data);
    } 
    public function editquotation()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/quotation/editquotation_view',
            'extra'     => 'content/quotation/js/js_index',
            'activeMenu'  => 'quotation',
        );
        $this->load->view('layout/wrapper', $data);
    }
}