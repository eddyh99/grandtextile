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
    public function barangquotation()
    {
        $sample_barang_data = array(
            array(
                'kategori' => 'Cuya',
                'namabarang' => 'barang 1',
                'minorder' => '50',
                'jumlah' => '70',
                'diskon' => '20',
                'GSM' => 'Cungkuk',
                'pcs' => '10',
                'ukuran' => 'XL',
                'cons' => '100',
                'consdll' => '111',
                'addOn' => 'bordir',
                'keterangan' => 'Lampu',
                'harga'=>'80.000',
                'warna'=>'merah',
                'ukuran_p'=>'60',
                'ukuran_l'=>'40',
                'ukuran_t'=>'90',
                'desain'=>'abc',
                'kain'=>'linen',
                
                
            ),
            array(
                'kategori' => 'Aldi',
                'namabarang' => 'barang 2',
                'minorder' => '20',
                'jumlah' => '40',
                'diskon' => '10',
                'GSM' => 'GSA',
                'pcs' => '10',
                'ukuran' => 'M',
                'cons' => '110',
                'consdll' => '112',
                'addOn' => 'bordir',
                'keterangan' => 'Lampu',
                'harga'=>'30.000',
                'warna'=>'merah',
                'ukuran_p'=>'60',
                'ukuran_l'=>'40',
                'ukuran_t'=>'90',
                'desain'=>'abc',
                'kain'=>'linen',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - quotation',
            'is_login'  => false,
            'content'   => 'content/quotation/barangquotation_view',
            'extra'     => 'content/quotation/js/js_index',
            'barang_data' => $sample_barang_data,
            'activeMenu'  => 'quotation',
        );
        $this->load->view('layout/wrapper', $data);
    }
}