<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengguna extends CI_Controller
{

    public function index()
    {

        $apiUrl = API_URL . '/v1/pengguna/get_pengguna';

        $apiData = bedapi($apiUrl);

        $data = array(
            'title'         => NAMETITLE . ' - pengguna',
            'is_login'      => false,
            'content'       => 'content/pengguna/pengguna_view',
            'extra'         => 'content/pengguna/js/js_index',
            'pengguna_data' => $apiData,
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side8'         => 'active',
    );
        );
        $this->load->view('layout/wrapper', $data);
    }
      public function addpengguna()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('nama'    , 'Nama'    , 'required|trim');
            $this->form_validation->set_rules('uname'   , 'Username', 'required|trim');
            $this->form_validation->set_rules('passwd'  , 'Password' , 'required|trim|min_length[8]|regex_match[/[0-9]/]');
            $this->form_validation->set_rules('role'    , 'Role'    , 'required|trim');

            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('message', validation_errors());
                redirect('pengguna/addpengguna');
                return;
            }

            $password = $this->input->post('passwd');
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $penggunaData = array(
                'nama'  => $this->security->xss_clean($this->input->post('nama')),
                'uname' => $this->security->xss_clean($this->input->post('uname')),
                'role'  => $this->security->xss_clean($this->input->post('role')),
                'passwd'=> $hashedPassword,
            );

            $apiUrl = API_URL . '/v1/pengguna/add_pengguna';

            $postData = json_encode($penggunaData);

            $apiResponse = bedapi($apiUrl, $postData);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'berhasil menambah pengguna.');
                redirect('pengguna');
            } else {
                $this->session->set_flashdata('message', 'gagal menambah pengguna.');
                    redirect('pengguna/addpengguna/');
            }
        } else {
            $data = array(
                'title'         => NAMETITLE . ' - Add pengguna',
                'is_login'      => false,
                'content'       => 'content/pengguna/addpengguna_view',
                'extra'         => 'content/pengguna/js/js_index',
                'colmas'        => 'show',
                'menmas'        => 'active',
                'side8'         => 'active',
            );
            $this->load->view('layout/wrapper', $data);
        }
    }
     public function editpengguna($uname)
        {
            $apiUrl = API_URL . '/v1/pengguna/getby_uname?uname=' . ($uname);
            $pengguna_data = bedapi($apiUrl);

            if (!$pengguna_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    , 'Nama'    , 'required|trim');
                $this->form_validation->set_rules('role'    , 'Role'    , 'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('pengguna/editpengguna/' . $uname);
                    return;
                }

                $password = $this->input->post('passwd');
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $updated_data = array(
                    'nama'  => $this->security->xss_clean($this->input->post('nama')),
                    'role'  => $this->security->xss_clean($this->input->post('role')),
                    'passwd'=> $hashedPassword,
                );

                $apiUpdateUrl = API_URL . '/v1/pengguna/update_pengguna?uname=' . ($uname);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'pengguna berhasil di ubah');
                    redirect('pengguna');
                } else {
                $this->session->set_flashdata('message', 'gagal merubah pengguna.');
                    redirect('pengguna/editpengguna/' . $uname);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit pengguna',
                    'is_login'      => false,
                    'content'       => 'content/pengguna/editpengguna_view',
                    'extra'         => 'content/pengguna/js/js_index',
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side8'         => 'active',
                    'pengguna_data' => $pengguna_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletepengguna($uname)
        {
            $apiUrl = API_URL . '/v1/pengguna/delete_pengguna?uname=' . ($uname);
            
            $apiResponse = bedapi($apiUrl);
            print_r($apiResponse);
            die;
            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'pengguna berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus pengguna');
            }

            redirect('pengguna');
        }

}