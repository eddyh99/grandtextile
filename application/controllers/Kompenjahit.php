<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kompenjahit extends CI_Controller
{

    public function index()
    {
        $apiUrl     = API_URL .'/v1/penjahit/get_allfee';
        $apiData    = bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - kompenjahit',
            'is_login'  => false,
            'content'   => 'content/komisipenjahit/kompenjahit_view',
            'extra'     => 'content/komisipenjahit/js/js_index',
            'kompenjahit_data' => $apiData,
            'activeMenu'  => 'kompenjahit',
        );
        $this->load->view('layout/wrapper', $data);
    }
     public function addkompenjahit()
        {
            
        $apiUrl = API_URL . '/v1/kategori/getKategori';
        $katbarang= bedapi($apiUrl);

            if ($this->input->post()) {

                $this->form_validation->set_rules('fee'    ,'Fee'          ,'required|trim');
                $this->form_validation->set_rules('jenis'   ,'Jenis'        ,'required|trim');
                $this->form_validation->set_rules('id_kategori'   ,'Jenis'        ,'required|trim');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('kompenjahit/addkompenjahit');
                return;
                };

                $kompenjahitData = array(
                    'fee'      => $this->security->xss_clean($this->input->post('fee')),
                    'jenis'      => $this->security->xss_clean($this->input->post('jenis')),
                    'id_kategori'      => $this->security->xss_clean($this->input->post('id_kategori')),

            );
                $apiUrl = API_URL . '/v1/penjahit/penjahit_fee';

                $postData = json_encode($kompenjahitData);
                $apiResponse = bedapi($apiUrl, $postData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Berhasil menambah komisi penjahit.');
                    redirect('kompenjahit');
                } else {
                $this->session->set_flashdata('message', 'gagal menambah komisi penjahit');
                    redirect('kompenjahit/addkompenjahit/');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add kompenjahit',
                    'is_login'      => false,
                    'content'       => 'content/komisipenjahit/addkompenjahit_view',
                    'extra'         => 'content/komisipenjahit/js/js_index',
                    'activeMenu'    => 'kompenjahit',
                    'katbarang'     => $katbarang,
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
   public function editkompenjahit($jenis,$id)
        {
            
            $apiUrl = API_URL . '/v1/penjahit/get_feebyid?jenis=' . $jenis .'&'. 'id_kategori=' . $id;
            $kompenjahit_data = bedapi($apiUrl);
            $apiUrl = API_URL . '/v1/kategori/getKategori';
            $katbarang= bedapi($apiUrl);
            if (!$kompenjahit_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('fee'    ,'Fee'          ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('kompenjahit/editkompenjahit/' . $jenis .'&'. 'id_kategori=' . $id);
                    return;
                }

                $updated_data = array(
                    'fee'      => $this->security->xss_clean($this->input->post('fee')),
                );
                $apiUpdateUrl = API_URL . '/v1/penjahit/updatepenjahit_fee?jenis=' . $jenis .'&'. 'id_kategori=' . $id;
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'kompenjahit berhasil di ubah.');
                    redirect('kompenjahit');
                } else {
                $this->session->set_flashdata('message', 'gagal mengubah kompenjahit');
                    redirect('kompenjahit/editkompenjahit/'. $jenis .'/'. 'id_kategori=' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit kompenjahit',
                    'is_login'      => false,
                    'content'       => 'content/komisipenjahit/editkompenjahit_view',
                    'extra'         => 'content/komisipenjahit/js/js_index',
                    'activeMenu'    => 'kompenjahit',
                    'kompenjahit_data' => $kompenjahit_data,
                    'katbarang'     => $katbarang,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletekompenjahit($jenis,$id)
        {
            $apiUrl = API_URL . '/v1/kompenjahit/delete_kompenjahit?id='. $jenis . 'id_kategori=' . $id;

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'kompenjahit berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus kompenjahit');
            }

            redirect('penjahit');
        }
}