<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bahanbaku extends CI_Controller
{

    public function index()
    {

        
        $apiUrl = API_URL . '/v1/bahanbaku/getBahanBaku';
        $apiData= bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - bahanbaku',
            'is_login'  => false,
            'content'   => 'content/bahanbaku/bahanbaku_view',
            'extra'     => 'content/bahanbaku/js/js_index',
            'bahanbaku_data' => $apiData,
            'activeMenu'  => 'bahanbaku',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addbahanbaku()
    {
            if ($this->input->post()) {

                $this->form_validation->set_rules('namabahan'       ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('satuan'          ,'Satuan'        ,'required|trim');
                $this->form_validation->set_rules('harga'           ,'harga'    ,'required|trim');


                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('bahanbaku/addbahanbaku');
                return;
                };

                $bahanbakuData = array(
                    'namabahan'      => $this->security->xss_clean($this->input->post('namabahan')),
                    'satuan'        => $this->security->xss_clean($this->input->post('satuan')),
                    'harga'         => $this->security->xss_clean($this->input->post('harga')),
            );
                $apiUrl = API_URL . '/v1/bahanbaku/add_bahanbaku';

                $postData = json_encode($bahanbakuData);
                $apiResponse = bedapi($apiUrl, $postData);
                
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Berhasil menambah bahanbaku.');
                    redirect('bahanbaku');
                } else {
                $this->session->set_flashdata('message', 'gagal menambah bahanbaku');
                    redirect('bahanbaku/addbahanbaku/');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add bahanbaku',
                    'is_login'      => false,
                    'content'       => 'content/bahanbaku/addbahanbaku_view',
                    'extra'         => 'content/bahanbaku/js/js_index',
                    'activeMenu'    => 'bahanbaku',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    public function editbahanbaku($id)
        {
            $apiUrl = API_URL . '/v1/bahanbaku/getby_bahanid?id=' . ($id);
            $bahanbaku_data = bedapi($apiUrl);

            if (!$bahanbaku_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {

                $this->form_validation->set_rules('namabahan'       ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('satuan'          ,'Satuan'        ,'required|trim');
                $this->form_validation->set_rules('harga'           ,'harga'    ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('bahanbaku/editbahanbaku/' . $id);
                    return;
                }

                $updated_data = array(
                    'namabahan'      => $this->security->xss_clean($this->input->post('namabahan')),
                    'satuan'        => $this->security->xss_clean($this->input->post('satuan')),
                    'harga'         => $this->security->xss_clean($this->input->post('harga')),
                );
                $apiUpdateUrl = API_URL . '/v1/bahanbaku/update_bahan?id=' . ($id);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'bahanbaku berhasil di ubah.');
                    redirect('bahanbaku');
                } else {
                $this->session->set_flashdata('message', 'gagal mengubah bahanbaku');
                    redirect('bahanbaku/editbahanbaku/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit bahanbaku',
                    'is_login'      => false,
                    'content'       => 'content/bahanbaku/editbahanbaku_view',
                    'extra'         => 'content/bahanbaku/js/js_index',
                    'activeMenu'    => 'bahanbaku',
                    'bahanbaku_data' => $bahanbaku_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletebahanbaku($id)
        {
            $apiUrl = API_URL . '/v1/bahanbaku/delete_bahan?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'bahanbaku berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus bahanbaku');
            }

            redirect('bahanbaku');
        }
}