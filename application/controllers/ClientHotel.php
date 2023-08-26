<?php
defined('BASEPATH') or exit('No direct script access allowed');

class clienthotel extends CI_Controller
{

    public function index()
    {

        $sample_clienthotel_data = array(
            array(
                'namahotel' => 'cuyahotel',
                'kota' => 'Kota 12',
                'area' => 'area 12',
                'alamat' => 'cungkuk',
                'plafon' => '4000',
                'cp' => 'Wayan.Wayu,Wajan',
                'telp' => '082122',
            ),
            array(
                'namahotel' => 'Aldihotel',
                'kota' => 'Kota 2',
                'area' => 'area 2',
                'alamat' => 'cungkuk',
                'plafon' => '4000',
                'cp' => 'Wayan.Wayu,Wajan',
                'telp' => '09911',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - clienthotel',
            'is_login'  => false,
            'content'   => 'content/clienthotel/clienthotel_view',
            'extra'     => 'content/clienthotel/js/js_index',
            'clienthotel_data' => $sample_clienthotel_data,
            'activeMenu'  => 'clienthotel',
            
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addclienthotel()
    {

        $data = array(
            'title'     => NAMETITLE . ' - clienthotel',
            'is_login'  => false,
            'content'   => 'content/clienthotel/addclienthotel_view',
            'extra'     => 'content/clienthotel/js/js_index',
            'activeMenu'  => 'clienthotel',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editclienthotel()
    {

        $data = array(
            'title'     => NAMETITLE . ' - clienthotel',
            'is_login'  => false,
            'content'   => 'content/clienthotel/editclienthotel_view',
            'extra'     => 'content/clienthotel/js/js_index',
            'activeMenu'  => 'clienthotel',
        );
        $this->load->view('layout/wrapper', $data);
    }

}