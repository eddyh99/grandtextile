<?php
defined('BASEPATH') or exit('No direct script access allowed');

class outsource extends CI_Controller
{

    public function index()
    {

        $apiUrl = API_URL . '/v1/outsource/get_outsource';
        $apiData= bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - outsource',
            'is_login'  => false,
            'content'   => 'content/outsource/outsource_view',
            'extra'     => 'content/outsource/js/js_index',
            'outsource_data' => $apiData,
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side15'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addoutsource()
    {
            if ($this->input->post()) {

                $this->form_validation->set_rules('nama'        ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'      ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('telp'        ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('keterangan'  ,'Keterangan'    ,'required|trim');


                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('outsource/addoutsource');
                return;
                };

                $outsourceData = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'keterangan'=> $this->security->xss_clean($this->input->post('keterangan')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
            );
                $apiUrl = API_URL . '/v1/outsource/add_outsource';

                $postData = json_encode($outsourceData);
                $apiResponse = bedapi($apiUrl, $postData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Berhasil menambah outsource.');
                    redirect('outsource');
                } else {
                $this->session->set_flashdata('message', 'gagal menambah outsource');
                    redirect('outsource/addoutsource/');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add outsource',
                    'is_login'      => false,
                    'content'       => 'content/outsource/addoutsource_view',
                    'extra'         => 'content/outsource/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side15'         => 'active',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    public function editoutsource($id)
        {
            $apiUrl = API_URL . '/v1/outsource/getby_id?id=' . ($id);
            $outsource_data = bedapi($apiUrl);

            if (!$outsource_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('keterangan'    ,'keterangan'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('outsource/editoutsource/' . $id);
                    return;
                }

                $updated_data = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'keterangan'      => $this->security->xss_clean($this->input->post('keterangan')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                );
                $apiUpdateUrl = API_URL . '/v1/outsource/update_outsource?id=' . ($id);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'outsource berhasil di ubah.');
                    redirect('outsource');
                } else {
                $this->session->set_flashdata('message', 'gagal mengubah outsource');
                    redirect('outsource/editoutsource/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit outsource',
                    'is_login'      => false,
                    'content'       => 'content/outsource/editoutsource_view',
                    'extra'         => 'content/outsource/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side15'         => 'active',
                    'outsource_data' => $outsource_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deleteoutsource($id)
        {
            $apiUrl = API_URL . '/v1/outsource/delete_outsource?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'outsource berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus outsource');
            }

            redirect('outsource');
        }
}