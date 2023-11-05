<?php
defined('BASEPATH') or exit('No direct script access allowed');

class suplier extends CI_Controller
{

    public function index()
    {
        
        $apiUrl = API_URL . '/v1/supplier/get_supplier';

        $apiData = bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - suplier',
            'is_login'  => false,
            'content'   => 'content/suplier/suplier_view',
            'extra'     => 'content/suplier/js/js_index',
            'suplier_data' => $apiData,
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side16'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addsuplier()
        {
            if ($this->input->post()) {

                $this->form_validation->set_rules('nama'    ,'nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'    ,'alamat'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'telp'          ,'required|trim');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    
                    redirect('suplier/addsuplier');
                return;
                };

                $suplierData = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'      => $this->security->xss_clean($this->input->post('alamat')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
            );
                $apiUrl = API_URL . '/v1/supplier/add_supplier';

                $postData = json_encode($suplierData);

                $apiResponse = bedapi($apiUrl, $postData);
                
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'berhasil menambah suplier.');
                    redirect('suplier');
                } else {
                    $this->session->set_flashdata('message', 'gagal.');
                    redirect('suplier/addsuplier');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add suplier',
                    'is_login'      => false,
                    'content'       => 'content/suplier/addsuplier_view',
                    'extra'         => 'content/suplier/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side16'         => 'active',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    public function editsuplier($id)
        {
            $apiUrl = API_URL . '/v1/supplier/getby_id?id='. ($id);
            $suplier_data = bedapi($apiUrl);

            if (!$suplier_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    ,'nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'    ,'alamat'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'telp'          ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('suplier/editsuplier/' . $id);
                    return;
                }

                $updated_data = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'      => $this->security->xss_clean($this->input->post('alamat')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                );

                $apiUpdateUrl = API_URL . '/v1/supplier/update_supplier?id=' . ($id);
                
                $apiUpdateData = json_encode($updated_data);
                
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);
                

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'berhasil mengubah suplier.');
                    redirect('suplier');
                } else {
                    $this->session->set_flashdata('message', 'gagal mengubah suplier.');
                    redirect('suplier/editsuplier/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit suplier',
                    'is_login'      => false,
                    'content'       => 'content/suplier/editsuplier_view',
                    'extra'         => 'content/suplier/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side16'         => 'active',
                    'suplier_data' => $suplier_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletesuplier($id)
        {
            $apiUrl = API_URL . '/v1/supplier/delete_supplier?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'suplier berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus suplier');
            }

            redirect('suplier');
        }
}