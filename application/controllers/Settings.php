<?php
defined('BASEPATH') or exit('No direct script access allowed');

class settings extends CI_Controller
{

    public function index()
    {

        $sample_settings_data = array(
            array(
                'margin' => '5',
                'limit' => '2',
            ),
            array(
                'margin' => '21',
                'limit' => '2',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - settings',
            'is_login'  => false,
            'content'   => 'content/settings/settings_view',
            'extra'     => 'content/settings/js/js_index',
            'settings_data' => $sample_settings_data,
            'activeMenu'  => 'settings',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addsettings()
    {
        $sample_settings_data = array(
            array(
                'margin' => 'Seminyak',
                'limit' => '31',
            ),
            array(
                'margin' => 'Seminyak',
                'limit' => '31',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - settings',
            'is_login'  => false,
            'content'   => 'content/settings/addsettings_view',
            'extra'     => 'content/settings/js/js_index',
            'activeMenu'  => 'settings',
            'settings_data' => $sample_settings_data,
        );
        $this->load->view('layout/wrapper', $data);
    } 
    public function editsettings()
    {

        $data = array(
            'title'     => NAMETITLE . ' - settings',
            'is_login'  => false,
            'content'   => 'content/settings/editsettings_view',
            'extra'     => 'content/settings/js/js_index',
            'activeMenu'  => 'settings',
        );
        $this->load->view('layout/wrapper', $data);
    }
}