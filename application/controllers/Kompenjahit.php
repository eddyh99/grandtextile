<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kompenjahit extends CI_Controller
{

    public function index()
    {

        $sample_kompenjahit_data = array(
            array(
                'jenis' => 'Cuya',
                'katbarang' => 'Kota 1',
                'fee' => 'HP 1',
            ),
            array(
                'jenis' => 'Aldi',
                'katbarang' => 'Kota 2',
                'fee' => 'HP 2',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - kompenjahit',
            'is_login'  => false,
            'content'   => 'content/komisipenjahit/kompenjahit_view',
            'extra'     => 'content/komisipenjahit/js/js_index',
            'kompenjahit_data' => $sample_kompenjahit_data,
            'activeMenu'  => 'kompenjahit',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addkompenjahit()
    {

        $data = array(
            'title'     => NAMETITLE . ' - kompenjahit',
            'is_login'  => false,
            'content'   => 'content/komisipenjahit/addkompenjahit_view',
            'extra'     => 'content/komisipenjahit/js/js_index',
            'activeMenu'  => 'kompenjahit',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editkompenjahit()
    {

        $data = array(
            'title'     => NAMETITLE . ' - kompenjahit',
            'is_login'  => false,
            'content'   => 'content/komisipenjahit/editkompenjahit_view',
            'extra'     => 'content/komisipenjahit/js/js_index',
            'activeMenu'  => 'kompenjahit',
        );
        $this->load->view('layout/wrapper', $data);
    }

}