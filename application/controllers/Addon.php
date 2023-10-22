<?php
defined('BASEPATH') or exit('No direct script access allowed');

class addon extends CI_Controller
{

    public function index()
    {

        $apiUrl     = API_URL .'/v1/addon/getaddon';
        $apiData    = bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - addon',
            'is_login'  => false,
            'content'   => 'content/addon/addon_view',
            'extra'     => 'content/addon/js/js_index',
            'addon_data' => $apiData,
            'activeMenu'  => 'addon',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addaddon()
    
        {
            if ($this->input->post()) {

                $this->form_validation->set_rules('namaaddon'    ,'Addon'          ,'required|trim');
                $this->form_validation->set_rules('harga'  ,'harga'        ,'required|trim');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('addon/addaddon');
                return;
                };

                $addonData = array(
                    'namaaddon'      => $this->security->xss_clean($this->input->post('namaaddon')),
                    'harga'    => $this->security->xss_clean($this->input->post('harga')),
            );
                $apiUrl = API_URL . '/v1/addon/add_addon';

                $postData = json_encode($addonData);
                $apiResponse = bedapi($apiUrl, $postData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Berhasil menambah addon.');
                    redirect('addon');
                } else {
                $this->session->set_flashdata('message', 'gagal menambah addon');
                    redirect('addon/addaddon/');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add addon',
                    'is_login'      => false,
                    'content'       => 'content/addon/addaddon_view',
                    'extra'         => 'content/addon/js/js_index',
                    'activeMenu'    => 'addon',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
   public function editaddon($id)
        {
            $apiUrl = API_URL . '/v1/addon/getby_addonid?id=' . ($id);
            $addon_data = bedapi($apiUrl);

            if (!$addon_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('namaaddon'    ,'Addon'          ,'required|trim');
                $this->form_validation->set_rules('harga'  ,'harga'        ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('addon/editaddon/' . $id);
                    return;
                }

                $updated_data = array(
                    'namaaddon'      => $this->security->xss_clean($this->input->post('namaaddon')),
                    'harga'    => $this->security->xss_clean($this->input->post('harga')),
                );
                $apiUpdateUrl = API_URL . '/v1/addon/update_addon?id=' . ($id);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'addon berhasil di ubah.');
                    redirect('addon');
                } else {
                $this->session->set_flashdata('message', 'gagal mengubah addon');
                    redirect('addon/editaddon/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit addon',
                    'is_login'      => false,
                    'content'       => 'content/addon/editaddon_view',
                    'extra'         => 'content/addon/js/js_index',
                    'activeMenu'    => 'addon',
                    'addon_data' => $addon_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deleteaddon($id)
        {
            $apiUrl = API_URL . '/v1/addon/delete_addon?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'addon berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus addon');
            }

            redirect('addon');
        }
}