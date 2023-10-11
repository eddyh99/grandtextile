<?php
defined('BASEPATH') or exit('No direct script access allowed');

class outsource extends CI_Controller
{

    public function index()
    {

        $sample_outsource_data = array(
            array(
                'nama' => 'Cuya',
                'telp' => 'HP 1',
                'keterangan' => 'email1@example.com',
                'alamat' =>'alamat 1',
            ),
            array(
                'nama' => 'Cuya2',
                'telp' => 'HP 2',
                'keterangan' => 'outsource',
                'alamat' =>'alamat 1',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - outsource',
            'is_login'  => false,
            'content'   => 'content/outsource/outsource_view',
            'extra'     => 'content/outsource/js/js_index',
            'outsource_data' => $sample_outsource_data,
            'activeMenu'  => 'outsource',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addoutsource()
    {

        $data = array(
            'title'     => NAMETITLE . ' - outsource',
            'is_login'  => false,
            'content'   => 'content/outsource/addoutsource_view',
            'extra'     => 'content/outsource/js/js_index',
            'activeMenu'  => 'outsource',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editoutsource()
    {

        $data = array(
            'title'     => NAMETITLE . ' - outsource',
            'is_login'  => false,
            'content'   => 'content/outsource/editoutsource_view',
            'extra'     => 'content/outsource/js/js_index',
            'activeMenu'  => 'outsource',
        );
        $this->load->view('layout/wrapper', $data);
    }

}