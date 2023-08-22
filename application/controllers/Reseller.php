<?php
defined('BASEPATH') or exit('No direct script access allowed');

class reseller extends CI_Controller
{

    public function reseller()
    {

        $sample_reseller_data = array(
            array(
                'nama' => 'Cuya',
                'kota' => 'Kota 1',
                'hp' => 'HP 1',
                'email' => 'email1@example.com',
                'plafon' => '3000',
                'alamat' => 'Cungkuk',
                'tanggal_lahir' => '10 Agustus 1997',
            ),
            array(
                'nama' => 'Aldi',
                'kota' => 'Kota 2',
                'hp' => 'HP 2',
                'email' => 'email2@example.com',
                'plafon' => '4000',
                'alamat' => 'Ngestiharjo',
                'tanggal_lahir' => '12 Agustus 1990',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - Reseller',
            'is_login'  => false,
            'content'   => 'content/reseller/reseller_view',
            'extra'     => 'content/reseller/js/js_index',
            'reseller_data' => $sample_reseller_data,
            'activeMenu'  => 'reseller',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addreseller()
    {

        $data = array(
            'title'     => NAMETITLE . ' - Reseller',
            'is_login'  => false,
            'content'   => 'content/reseller/addreseller_view',
            'extra'     => 'content/reseller/js/js_index',
            'activeMenu'  => 'reseller',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editreseller()
    {

        $data = array(
            'title'     => NAMETITLE . ' - Reseller',
            'is_login'  => false,
            'content'   => 'content/reseller/editreseller_view',
            'extra'     => 'content/reseller/js/js_index',
            'activeMenu'  => 'reseller',
        );
        $this->load->view('layout/wrapper', $data);
    }

}