<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjahit extends CI_Controller
{

    public function index()
    {

        $apiUrl     = API_URL .'/v1/penjahit/get_penjahit';
        $apiData    = bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - penjahit',
            'is_login'  => false,
            'content'   => 'content/penjahit/penjahit_view',
            'extra'     => 'content/penjahit/js/js_index',
            'penjahit_data' => $apiData,
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side11'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addpenjahit()
    
        {
            if ($this->input->post()) {

                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Whatsapp'          ,'required|trim');
                $this->form_validation->set_rules('jenis'   ,'Jenis'        ,'required|trim');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('penjahit/addpenjahit');
                return;
                };

                $penjahitData = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'jenis'      => $this->security->xss_clean($this->input->post('jenis')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
            );
                $apiUrl = API_URL . '/v1/penjahit/add_penjahit';

                $postData = json_encode($penjahitData);
                $apiResponse = bedapi($apiUrl, $postData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Berhasil menambah penjahit.');
                    redirect('penjahit');
                } else {
                $this->session->set_flashdata('message', 'gagal menambah penjahit');
                    redirect('penjahit/addpenjahit/');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add penjahit',
                    'is_login'      => false,
                    'content'       => 'content/penjahit/addpenjahit_view',
                    'extra'         => 'content/penjahit/js/js_index',
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side11'         => 'active',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
   public function editpenjahit($id)
        {
            $apiUrl = API_URL . '/v1/penjahit/getby_id?id=' . ($id);
            $penjahit_data = bedapi($apiUrl);

            if (!$penjahit_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Whatsapp'          ,'required|trim');
                $this->form_validation->set_rules('jenis'   ,'Jenis'        ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('penjahit/editpenjahit/' . $id);
                    return;
                }

                $updated_data = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'jenis'      => $this->security->xss_clean($this->input->post('jenis')),
                );
                $apiUpdateUrl = API_URL . '/v1/penjahit/update_penjahit?id=' . ($id);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'penjahit berhasil di ubah.');
                    redirect('penjahit');
                } else {
                $this->session->set_flashdata('message', 'gagal mengubah penjahit');
                    redirect('penjahit/editpenjahit/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit penjahit',
                    'is_login'      => false,
                    'content'       => 'content/penjahit/editpenjahit_view',
                    'extra'         => 'content/penjahit/js/js_index',
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side11'         => 'active',
                    'penjahit_data' => $penjahit_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletepenjahit($id)
        {
            $apiUrl = API_URL . '/v1/penjahit/delete_penjahit?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'penjahit berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus penjahit');
            }

            redirect('penjahit');
        }
}