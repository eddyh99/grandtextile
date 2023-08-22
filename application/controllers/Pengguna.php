<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengguna extends CI_Controller
{

    public function pengguna()
    {

        $sample_pengguna_data = array(
            array(
                'nama' => 'cuya',
                'username' => 'cuya1',
                'password' => 'cuya11',
                'role' => 'user',
            ),
            array(
                'nama' => 'cuya2',
                'username' => 'cuya21',
                'password' => 'cuya211',
                'role' => 'admin',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - pengguna',
            'is_login'  => false,
            'content'   => 'content/pengguna/pengguna_view',
            'extra'     => 'content/pengguna/js/js_index',
            'pengguna_data' => $sample_pengguna_data,
            'activeMenu'  => 'pengguna',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addpengguna()
    {

        $data = array(
            'title'     => NAMETITLE . ' - pengguna',
            'is_login'  => false,
            'content'   => 'content/pengguna/addpengguna_view',
            'extra'     => 'content/pengguna/js/js_index',
            'activeMenu'  => 'pengguna',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editpengguna()
    {

        $data = array(
            'title'     => NAMETITLE . ' - pengguna',
            'is_login'  => false,
            'content'   => 'content/pengguna/editpengguna_view',
            'extra'     => 'content/pengguna/js/js_index',
            'activeMenu'  => 'pengguna',
        );
        $this->load->view('layout/wrapper', $data);
    }

}