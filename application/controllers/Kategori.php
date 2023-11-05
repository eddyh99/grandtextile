<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function index()
    {

        $apiUrl = API_URL . '/v1/kategori/getKategori';

        $apiData = bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - kategori',
            'is_login'  => false,
            'content'   => 'content/kategori/kategori_view',
            'extra'     => 'content/kategori/js/js_index',
            'kategori_data' => $apiData,
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side6'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addkategori()
        {
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
                    redirect('kategori');
                } else {
                    $this->session->set_flashdata('message', 'gagal.');
                    redirect('kategori/addkategori');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add kategori',
                    'is_login'      => false,
                    'content'       => 'content/kategori/addkategori_view',
                    'extra'         => 'content/kategori/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side6'         => 'active',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    public function editkategori($id)
        {
            $apiUrl = API_URL . '/v1/kategori/getby_kategori?id=' . ($id);
            $kategori_data = bedapi($apiUrl);

            if (!$kategori_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('namakategori','namakategori','required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('kategori/editkategori/' . $id);
                    return;
                }

                $updated_data = array(
                    'namakategori' => $this->security->xss_clean($this->input->post('namakategori')),
                );

                $apiUpdateUrl = API_URL . '/v1/kategori/update_kategori?id=' . ($id);
                
                $apiUpdateData = json_encode($updated_data);
                
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);
                

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'berhasil mengubah kategori.');
                    redirect('kategori');
                } else {
                    $this->session->set_flashdata('message', 'gagal mengubah kategori.');
                    redirect('kategori/editkategori/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit kategori',
                    'is_login'      => false,
                    'content'       => 'content/kategori/editkategori_view',
                    'extra'         => 'content/kategori/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side6'         => 'active',
                    'kategori_data' => $kategori_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletekategori($id)
        {
            $apiUrl = API_URL . '/v1/kategori/delete_kategori?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'kategori berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus kategori');
            }

            redirect('kategori');
        }
}