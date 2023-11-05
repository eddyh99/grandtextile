<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jadwalpotong extends CI_Controller
{

    public function index()
    {

        $sample_jadwalpotong_data = array(
            array(
                'nama' => 'Cuya',
                'tgl' => 'tgl 2',
                'NoWo' =>'121331',
            ),
            array(
                'tgl' => 'tgl 1',
                'NoWo' =>'31311',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - jadwalpotong',
            'is_login'  => false,
            'content'   => 'content/jadwalpotong/jadwalpotong_view',
            'extra'     => 'content/jadwalpotong/js/js_index',
            'jadwalpotong_data' => $sample_jadwalpotong_data,
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side21'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addjadwalpotong()
    {

        $data = array(
            'title'     => NAMETITLE . ' - jadwalpotong',
            'is_login'  => false,
            'content'   => 'content/jadwalpotong/addjadwalpotong_view',
            'extra'     => 'content/jadwalpotong/js/js_index',
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side21'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editjadwalpotong()
    {

        $data = array(
            'title'     => NAMETITLE . ' - jadwalpotong',
            'is_login'  => false,
            'content'   => 'content/jadwalpotong/editjadwalpotong_view',
            'extra'     => 'content/jadwalpotong/js/js_index',
            'coltrans'        => 'show',
            'mentrans'        => 'active',
            'side21'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }

}