<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjahit extends CI_Controller
{

    public function index()
    {

        $sample_penjahit_data = array(
            array(
                'nama' => 'Cuya',
                'alamat' => 'Kota 1',
                'whatsapp' => 'HP 1',
                'jenis' => 'email1@example.com',
            ),
            array(
                'nama' => 'Cuya2',
                'alamat' => 'Kota 2',
                'whatsapp' => 'HP 2',
                'jenis' => 'penjahit',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - penjahit',
            'is_login'  => false,
            'content'   => 'content/penjahit/penjahit_view',
            'extra'     => 'content/penjahit/js/js_index',
            'penjahit_data' => $sample_penjahit_data,
            'activeMenu'  => 'penjahit',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addpenjahit()
    {

        $data = array(
            'title'     => NAMETITLE . ' - penjahit',
            'is_login'  => false,
            'content'   => 'content/penjahit/addpenjahit_view',
            'extra'     => 'content/penjahit/js/js_index',
            'activeMenu'  => 'penjahit',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editpenjahit()
    {

        $data = array(
            'title'     => NAMETITLE . ' - penjahit',
            'is_login'  => false,
            'content'   => 'content/penjahit/editpenjahit_view',
            'extra'     => 'content/penjahit/js/js_index',
            'activeMenu'  => 'penjahit',
        );
        $this->load->view('layout/wrapper', $data);
    }

}