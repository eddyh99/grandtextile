<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function index()
    {

        $sample_kategori_data = array(
            array(
                'kategori' => 'Seminyak',
                'barang' => '31',
                'sales' => '31',
            ),
            array(
                'kategori' => 'Nusa Dua',
                'barang' => '2',
                'sales' => '1',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - kategori',
            'is_login'  => false,
            'content'   => 'content/kategori/kategori_view',
            'extra'     => 'content/kategori/js/js_index',
            'kategori_data' => $sample_kategori_data,
            'activeMenu'  => 'kategori',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addkategori()
    {

        $data = array(
            'title'     => NAMETITLE . ' - kategori',
            'is_login'  => false,
            'content'   => 'content/kategori/addkategori_view',
            'extra'     => 'content/kategori/js/js_index',
            'activeMenu'  => 'kategori',
        );
        $this->load->view('layout/wrapper', $data);
    } 
    public function editkategori()
    {

        $data = array(
            'title'     => NAMETITLE . ' - kategori',
            'is_login'  => false,
            'content'   => 'content/kategori/editkategori_view',
            'extra'     => 'content/kategori/js/js_index',
            'activeMenu'  => 'kategori',
        );
        $this->load->view('layout/wrapper', $data);
    }
}