<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cphotel extends CI_Controller
{

    public function index()
    {

        $apiUrl = API_URL . '/v1/hotel/get_cphotel';

        $apiData = bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - Reseller',
            'is_login'  => false,
            'content'   => 'content/cphotel/cphotel_view',
            'extra'     => 'content/cphotel/js/js_index',
            'cphotel_data' => $apiData,
            'activeMenu'  => 'cphotel',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addcphotel()
        {
            if ($this->input->post()) {

                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('tgllahir','Tanggal Lahir' ,'required|trim');
                $this->form_validation->set_rules('komisi'  ,'Komisi'        ,'required|trim');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('tambaherror', validation_errors());
                    redirect('cphotel/addcphotel');
                return;
                };

                $cphotelData = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'tgllahir'  => $this->security->xss_clean($this->input->post('tgllahir')),
                    'komisi'    => $this->security->xss_clean($this->input->post('komisi')),
            );
            
                $apiUrl = API_URL . '/v1/hotel/add_cphotel';

                $postData = json_encode($cphotelData);

                $apiResponse = bedapi($apiUrl, $postData);
                

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'CP berhasil di tambahkan.');
                    redirect('cphotel');
                } else {
                    $this->session->set_flashdata('message', 'gagal menambah CP.');
                    redirect('cphotel/editcphotel/');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add cphotel',
                    'is_login'      => false,
                    'content'       => 'content/cphotel/addcphotel_view',
                    'extra'         => 'content/cphotel/js/js_index',
                    'activeMenu'    => 'cphotel',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    public function editcphotel($id)
        {
            $apiUrl = API_URL . '/v1/hotel/getby_cpid?id=' . ($id);
            $cphotel_data = bedapi($apiUrl);

            if (!$cphotel_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('tgllahir','Tanggal Lahir' ,'required|trim');
                $this->form_validation->set_rules('komisi'  ,'Komisi'        ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('cphotel/editcphotel/' . $id);
                    return;
                }

                $updated_data = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'tgllahir'  => $this->security->xss_clean($this->input->post('tgllahir')),
                    'komisi'    => $this->security->xss_clean($this->input->post('komisi')),
                );
                $apiUpdateUrl = API_URL . '/v1/hotel/update_cphotel?id=' . ($id);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'CP berhasil di ubah.');
                    redirect('cphotel');
                } else {
                $this->session->set_flashdata('message', 'gagal menghapus CP.');
                    redirect('cphotel/editcphotel/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit cphotel',
                    'is_login'      => false,
                    'content'       => 'content/cphotel/editcphotel_view',
                    'extra'         => 'content/cphotel/js/js_index',
                    'activeMenu'    => 'cphotel',
                    'cphotel_data' => $cphotel_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletecphotel($id)
        {
            $apiUrl = API_URL . '/v1/hotel/delete_cphotel?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'CP berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus CP');
            }

            redirect('cphotel');
        }
}