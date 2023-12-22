<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengaturan extends CI_Controller
{

    public function index()
    {

       
        $data = array(
            'title'     => NAMETITLE . ' - pengaturan',
            'is_login'  => false,
            'content'   => 'content/pengaturan/pengaturan',
            'extra'     => 'content/pengaturan/js/js_index',
            'coldash'        => 'show',
            'mendash'        => 'active',
            'side30'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}