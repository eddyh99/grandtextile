<?php
defined('BASEPATH') or exit('No direct script access allowed');

class area extends CI_Controller
{

    public function area()
    {

        $sample_area_data = array(
            array(
                'area' => 'Seminyak',
                'client' => '31',
                'sales' => '31',
            ),
            array(
                'area' => 'Nusa Dua',
                'client' => '2',
                'sales' => '1',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - area',
            'is_login'  => false,
            'content'   => 'content/area/area_view',
            'extra'     => 'content/area/js/js_index',
            'area_data' => $sample_area_data,
            'activeMenu'  => 'area',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addarea()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/area/addarea_view',
            'extra'     => 'content/area/js/js_index',
            'activeMenu'  => 'area',
        );
        $this->load->view('layout/wrapper', $data);
    } 
    public function editarea()
    {

        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/area/editarea_view',
            'extra'     => 'content/area/js/js_index',
            'activeMenu'  => 'area',
        );
        $this->load->view('layout/wrapper', $data);
    }
}