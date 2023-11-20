<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lihatproduk extends CI_Controller
{

    public function index()
    {

        $sample_produk_data = array(
            array(
                'kategori' => 'towel',
                'quality' => 'fine',
                'design' => 'tanned',
                'namabarang' =>'towel aja',
                'color'=>'biru,merah',
                'img_src' => 'assets/img/towel.png'
            ),
            array(
                'kategori' => 'towel2',
                'quality' => 'good',
                'design' => 'marked',
                'namabarang' =>'towel aja',
                'color'=>'biru',
                'img_src' => 'assets/img/towel.png'
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - produk',
            'is_login'  => false,
            'content'   => 'content/lihatproduk/lproduk_view',
            'extra'     => 'content/lihatproduk/js/js_index',
            'produk_data' => $sample_produk_data,
            'coldash'        => 'show',
            'mendash'        => 'active',
            'side27'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}