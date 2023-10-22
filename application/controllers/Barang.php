<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang extends CI_Controller
{

    public function index()
    {

        $sample_barang_data = array(
            array(
                'kategori' => 'Cuya',
                'namabarang' => 'Kota 1',
                'design' => 'HP 1',
                'quality' => 'email1@example.com',
                'color' => '3000',
                'GSM' => 'Cungkuk',
                'pcs' => '10 Agustus 1997',
                'ukuran' => 'XL',
                'cons' => '100',
                'consdll' => '111',
                'addOn' => 'bordir',
                'keterangan' => 'Lampu',
            ),
            array(
                'kategori' => 'Aldi',
                'namabarang' => 'Kota 2',
                'design' => 'HP 2',
                'quality' => 'email2@example.com',
                'color' => '4000',
                'GSM' => 'GSA',
                'pcs' => '10',
                'ukuran' => 'M',
                'cons' => '110',
                'consdll' => '112',
                'addOn' => 'bordir',
                'keterangan' => 'Lampu',
            ),
        );

        $data = array(
            'title'     => NAMETITLE . ' - barang',
            'is_login'  => false,
            'content'   => 'content/barang/barang_view',
            'extra'     => 'content/barang/js/js_index',
            'barang_data' => $sample_barang_data,
            'activeMenu'  => 'barang',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addbarang()
    {
        
        $apiUrl = API_URL . '/v1/kategori/getKategori';
        $kat_data = bedapi ($apiUrl);

        if ($this->input->post()) {

                $this->form_validation->set_rules('namakategori'    ,'namakategori'          ,'required|trim');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    
                    redirect('kategori/addkategori');
                return;
                };

                $kategoriData = array(
                    'namakategori'      => $this->security->xss_clean($this->input->post('namakategori')),
            );
                $apiUrl = API_URL . '/v1/kategori/add_kategori';

                $postData = json_encode($kategoriData);

                $apiResponse = bedapi($apiUrl, $postData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'berhasil menambah kategori.');
                    redirect('barang/addbarang');
                }
        }

        $data = array(
            'title'     => NAMETITLE . ' - barang',
            'is_login'  => false,
            'content'   => 'content/barang/addbarang_view',
            'extra'     => 'content/barang/js/js_index',
            'activeMenu'  => 'barang',
            'kat_data'     => $kat_data,
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function editbarang()
    {

        $data = array(
            'title'     => NAMETITLE . ' - barang',
            'is_login'  => false,
            'content'   => 'content/barang/editbarang_view',
            'extra'     => 'content/barang/js/js_index',
            'activeMenu'  => 'barang',
        );
        $this->load->view('layout/wrapper', $data);
    }

}