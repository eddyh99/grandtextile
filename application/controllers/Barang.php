<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang extends CI_Controller
{

    public function barang()
    {

        $sample_barang_data = array(
            array(
                'kategori' => 'Cuya',
                'namabarang' => 'Kota 1',
                'design' => 'HP 1',
                'quality' => 'email1@example.com',
                'color' => '3000',
                'GSM' => 'Cungkuk',
                'pcs' => '10 Agustus 1997',
                'ukuran' => 'XL',
                'cons' => '100',
                'consdll' => '111',
                'keterangan' => 'Lampu',
            ),
            array(
                'kategori' => 'Aldi',
                'namabarang' => 'Kota 2',
                'design' => 'HP 2',
                'quality' => 'email2@example.com',
                'color' => '4000',
                'GSM' => 'GSA',
                'pcs' => '10',
                'ukuran' => 'M',
                'cons' => '110',
                'consdll' => '112',
                'keterangan' => 'Lampu',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - barang',
            'is_login'  => false,
            'content'   => 'content/barang/barang_view',
            'extra'     => 'content/barang/js/js_index',
            'barang_data' => $sample_barang_data,
            'activeMenu'  => 'barang',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addbarang()
    {

        $data = array(
            'title'     => NAMETITLE . ' - barang',
            'is_login'  => false,
            'content'   => 'content/barang/addbarang_view',
            'extra'     => 'content/barang/js/js_index',
            'activeMenu'  => 'barang',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editbarang()
    {

        $data = array(
            'title'     => NAMETITLE . ' - barang',
            'is_login'  => false,
            'content'   => 'content/barang/editbarang_view',
            'extra'     => 'content/barang/js/js_index',
            'activeMenu'  => 'barang',
        );
        $this->load->view('layout/wrapper', $data);
    }

}