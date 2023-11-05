<?php
defined('BASEPATH') or exit('No direct script access allowed');

class retailer extends CI_Controller
{

    public function index()
    {

        $apiUrl = API_URL . '/v1/retailer/get_retailer';

        $apiData = bedapi($apiUrl);

        $data = array(
            'title'     => NAMETITLE . ' - retailer',
            'is_login'  => false,
            'content'   => 'content/retailer/retailer_view',
            'extra'     => 'content/retailer/js/js_index',
            'retailer_data' => $apiData,
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side14'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addretailer()
    
        {
            if ($this->input->post()) {

                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('kota'    ,'Kota'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('tgllahir','Tanggal Lahir' ,'required|trim');
                $this->form_validation->set_rules('email'   ,'Email'         ,'required|trim');
                $this->form_validation->set_rules('passwd'  ,'Password'      ,'required|trim|min_length[8]|regex_match[/[0-9]/]');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('retailer/addretailer');
                return;
                };
                $password = $this->security->xss_clean($this->input->post('passwd'));
                $hashedPassword = sha1($password);

                $retailerData = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'kota'      => $this->security->xss_clean($this->input->post('kota')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'tgllahir'  => $this->security->xss_clean($this->input->post('tgllahir')),
                    'email'     => $this->security->xss_clean($this->input->post('email')),
                    'passwd'    => $hashedPassword,
            );
                $apiUrl = API_URL . '/v1/retailer/add_retailer';

                $postData = json_encode($retailerData);
                $apiResponse = bedapi($apiUrl, $postData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Berhasil menambah retailer.');
                    redirect('retailer');
                } else {
                $this->session->set_flashdata('message', 'gagal menambah retailer');
                    redirect('retailer/addretailer/');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add retailer',
                    'is_login'      => false,
                    'content'       => 'content/retailer/addretailer_view',
                    'extra'         => 'content/retailer/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side14'         => 'active',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
   public function editretailer($email)
        {
            $apiUrl = API_URL . '/v1/retailer/getby_email?email=' . ($email);
            $retailer_data = bedapi($apiUrl);

            if (!$retailer_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('kota'    ,'Kota'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('tgllahir','Tanggal Lahir' ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('retailer/editretailer/' . $email);
                    return;
                }
                $password = $this->input->post('passwd');
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $updated_data = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'kota'      => $this->security->xss_clean($this->input->post('kota')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'tgllahir'  => $this->security->xss_clean($this->input->post('tgllahir')),
                );
                $apiUpdateUrl = API_URL . '/v1/retailer/update_retailer?email=' . ($email);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'retailer berhasil di ubah.');
                    redirect('retailer');
                } else {
                $this->session->set_flashdata('message', 'gagal mengubah retailer');
                    redirect('retailer/editretailer/' . $email);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit retailer',
                    'is_login'      => false,
                    'content'       => 'content/retailer/editretailer_view',
                    'extra'         => 'content/retailer/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side14'         => 'active',
                    'retailer_data' => $retailer_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deleteretailer($email)
        {
            $apiUrl = API_URL . '/v1/retailer/delete_retailer?email=' . ($email);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'retailer berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus retailer');
            }

            redirect('retailer');
        }
}