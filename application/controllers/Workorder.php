<?php
defined('BASEPATH') or exit('No direct script access allowed');

class workorder extends CI_Controller
{

    public function index()
    {

        $sample_workorder_data = array(
            array(
                'invoice' => 'Cuya',
                'penjahit' => 'HP 1',
                'NoWo' =>'alamat 1',
                'tgl'=>'20 agustus',
                'addcost'=>'20000',
                'jenis'=>'kain',
                'bahan'=>'wool',
                'keterangan'=>'ini keterangan',
            ),
            array(
                'invoice' => 'Cuya2',
                'penjahit' => 'HP 3',
                'NoWo' =>'alamat 1',
                'tgl'=>'21 agustus',
                'addcost'=>'200001',
                'jenis'=>'kain',
                'bahan'=>'wool',
                'keterangan'=>'ini keterangan 2',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - workorder',
            'is_login'  => false,
            'content'   => 'content/workorder/workorder_view',
            'extra'     => 'content/workorder/js/js_index',
            'workorder_data' => $sample_workorder_data,
            'activeMenu'  => 'workorder',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addworkorder()
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
            'title'     => NAMETITLE . ' - workorder',
            'is_login'  => false,
            'content'   => 'content/workorder/addworkorder_view',
            'extra'     => 'content/workorder/js/js_index',
            'barang_data' => $sample_barang_data,
            'activeMenu'  => 'workorder',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editworkorder()
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
            'title'     => NAMETITLE . ' - workorder',
            'is_login'  => false,
            'content'   => 'content/workorder/editworkorder_view',
            'extra'     => 'content/workorder/js/js_index',
            'barang_data' => $sample_barang_data,
            'activeMenu'  => 'workorder',
        );
        $this->load->view('layout/wrapper', $data);
    }

}