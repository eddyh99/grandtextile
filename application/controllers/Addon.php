<?php
defined('BASEPATH') or exit('No direct script access allowed');

class addon extends CI_Controller
{

    public function index()
    {

        $sample_addon_data = array(
            array(
                'namaaddon' => 'Seminyak',
                'harga' => '31',
            ),
            array(
                'namaaddon' => 'Nusa Dua',
                'harga' => '2',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - addon',
            'is_login'  => false,
            'content'   => 'content/addon/addon_view',
            'extra'     => 'content/addon/js/js_index',
            'addon_data' => $sample_addon_data,
            'activeMenu'  => 'addon',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addaddon()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/addon/addaddon_view',
            'extra'     => 'content/addon/js/js_index',
            'activeMenu'  => 'addon',
        );
        $this->load->view('layout/wrapper', $data);
    } 
    public function editaddon()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/addon/editaddon_view',
            'extra'     => 'content/addon/js/js_index',
            'activeMenu'  => 'addon',
        );
        $this->load->view('layout/wrapper', $data);
    }
}