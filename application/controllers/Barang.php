<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang extends CI_Controller
{

    public function index()
    {
        $apiUrl = API_URL . '/v1/barang/getbarang';

        $apiData = bedapi($apiUrl);
        
        $data = array(
            'title'     => NAMETITLE . ' - barang',
            'is_login'  => false,
            'content'   => 'content/barang/barang_view',
            'extra'     => 'content/barang/js/js_index',
            'barang_data' => $apiData,
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side7'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addbarang()
    {
        $apiUrl     = API_URL .'/v1/addon/getaddon';
        $katapiUrl     = API_URL . '/v1/kategori/getKategori';
        $addonapiUrl     = API_URL .'/v1/addon/getaddon';
        $kat_data   = bedapi ($katapiUrl);
        $addon_data = bedapi($addonapiUrl);

        if ($this->input->post()) {

            $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required|trim');
            $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
            $this->form_validation->set_rules('design', 'Desain', 'required|trim');
            $this->form_validation->set_rules('minorder', 'Minimal Order', 'required|trim');
            $this->form_validation->set_rules('panjang', 'Panjang', 'required|trim');
            $this->form_validation->set_rules('lebar', 'Lebar', 'required|trim');
            $this->form_validation->set_rules('tinggi', 'Tinggi', 'required|trim');
            $this->form_validation->set_rules('gsm', 'GSM', 'required|trim');
            $this->form_validation->set_rules('gr', 'GR', 'required|trim');
            $this->form_validation->set_rules('quality', 'Quality', 'required|trim');
            $this->form_validation->set_rules('color', 'Color', 'required|trim');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
            $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
            $this->form_validation->set_rules('addon[1][id_addon]', 'Addon ID', 'required|trim');
            $this->form_validation->set_rules('addon[1][jumlah]', 'Addon Jumlah', 'required|trim');

            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('message', validation_errors());
                redirect('barang/addbarang');
                return;
            };

            $barangData = array(
                'namabarang' => $this->security->xss_clean($this->input->post('namabarang')),
                'kategori' => $this->security->xss_clean($this->input->post('kategori')),
                'design' => $this->security->xss_clean($this->input->post('design')),
                'minorder' => $this->security->xss_clean($this->input->post('minorder')),
                'panjang' => $this->security->xss_clean($this->input->post('panjang')),
                'lebar' => $this->security->xss_clean($this->input->post('lebar')),
                'tinggi' => $this->security->xss_clean($this->input->post('tinggi')),
                'gsm' => $this->security->xss_clean($this->input->post('gsm')),
                'gr' => $this->security->xss_clean($this->input->post('gr')),
                'quality' => $this->security->xss_clean($this->input->post('quality')),
                'color' => $this->security->xss_clean($this->input->post('color')),
                'keterangan' => $this->security->xss_clean($this->input->post('keterangan')),
                'harga' => $this->security->xss_clean($this->input->post('harga')),
                'addon' => [
                    [
                        'id_addon' => $this->security->xss_clean($this->input->post('addon[1][id_addon]')),
                        'jumlah' => $this->security->xss_clean($this->input->post('addon[1][jumlah]'))
                    ]
                ]
            );
            
            $apiUrl = API_URL . '/v1/barang/add_barang';

                $postData = json_encode($barangData);

                $apiResponse = bedapi($apiUrl, $postData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Berhasil menambah barang.');
                    redirect('barang');
                } else {
                $this->session->set_flashdata('message', 'gagal menambah barang');
                    redirect('barang/addbarang/');
                }
            } else{   
                $data = array(
                'title'     => NAMETITLE . ' - barang',
                'is_login'  => false,
                'content'   => 'content/barang/addbarang_view',
                'extra'     => 'content/barang/js/js_index',
                'colmas'        => 'show',
                'menmas'        => 'active',
                'side7'         => 'active',
                'kat_data'     => $kat_data,
                'addon_data'    => $addon_data,
            );
            $this->load->view('layout/wrapper', $data);
        }
    }
    public function editbarang($id)
    {
        $apiUrl         = API_URL . '/v1/barang/getby_barangid?id=' . ($id);
        $barang_data    = bedapi ($apiUrl);
        $katapiUrl      = API_URL . '/v1/kategori/getKategori';
        $addonapiUrl    = API_URL .'/v1/addon/getaddon';
        $kat_data       = bedapi ($katapiUrl);
        $addon_data     = bedapi ($addonapiUrl);
        if ($this->input->post()) {

            $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required|trim');
            $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
            $this->form_validation->set_rules('design', 'Desain', 'required|trim');
            $this->form_validation->set_rules('minorder', 'Minimal Order', 'required|trim');
            $this->form_validation->set_rules('panjang', 'Panjang', 'required|trim');
            $this->form_validation->set_rules('lebar', 'Lebar', 'required|trim');
            $this->form_validation->set_rules('tinggi', 'Tinggi', 'required|trim');
            $this->form_validation->set_rules('gsm', 'GSM', 'required|trim');
            $this->form_validation->set_rules('gr', 'GR', 'required|trim');
            $this->form_validation->set_rules('quality', 'Quality', 'required|trim');
            $this->form_validation->set_rules('color', 'Color', 'required|trim');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
            $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
            $this->form_validation->set_rules('addon[1][id_addon]', 'Addon ID', 'required|trim');
            $this->form_validation->set_rules('addon[1][jumlah]', 'Addon Jumlah', 'required|trim');

            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('message', validation_errors());
                redirect('barang/editbarang/' . $id);
                return;
            };

            $updated_data = array(
                'namabarang' => $this->security->xss_clean($this->input->post('namabarang')),
                'kategori' => $this->security->xss_clean($this->input->post('kategori')),
                'design' => $this->security->xss_clean($this->input->post('design')),
                'minorder' => $this->security->xss_clean($this->input->post('minorder')),
                'panjang' => $this->security->xss_clean($this->input->post('panjang')),
                'lebar' => $this->security->xss_clean($this->input->post('lebar')),
                'tinggi' => $this->security->xss_clean($this->input->post('tinggi')),
                'gsm' => $this->security->xss_clean($this->input->post('gsm')),
                'gr' => $this->security->xss_clean($this->input->post('gr')),
                'quality' => $this->security->xss_clean($this->input->post('quality')),
                'color' => $this->security->xss_clean($this->input->post('color')),
                'harga' => $this->security->xss_clean($this->input->post('harga')),
                'keterangan' => $this->security->xss_clean($this->input->post('keterangan')),
                'addon' => [
                    [
                        'id_addon' => $this->security->xss_clean($this->input->post('addon[1][id_addon]')),
                        'jumlah' => $this->security->xss_clean($this->input->post('addon[1][jumlah]'))
                    ]
                ]
            );
            
                $apiUpdateUrl = API_URL . '/v1/barang/update_barang?id=' . ($id);
                
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Berhasil menambah barang.');
                    redirect('barang');
                } else {
                $this->session->set_flashdata('message', 'gagal menambah barang');
                    redirect('barang/editbarang/' . $id);
                }
            } else{   
                $data = array(
                'title'     => NAMETITLE . ' - barang',
                'is_login'  => false,
                'content'   => 'content/barang/editbarang_view',
                'extra'     => 'content/barang/js/js_index',
                'colmas'        => 'show',
                'menmas'        => 'active',
                'side7'         => 'active',
                'barang_data'   => $barang_data,
                'kat_data'     => $kat_data,
                'addon_data'    => $addon_data,
            );
            $this->load->view('layout/wrapper', $data);
        }
    }
    public function deletebarang($id)
    {
        $apiUrl = API_URL . '/v1/barang/delete_barang?id=' . ($id);

        $apiResponse = bedapi($apiUrl);

        if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
            $this->session->set_flashdata('message', 'Barang berhasil di hapus.');
        } else {
            $this->session->set_flashdata('message', 'gagal menghapus Barang');
        }

        redirect('barang');
    }
}