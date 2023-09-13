<?php
defined('BASEPATH') or exit('No direct script access allowed');

class reseller extends CI_Controller
{

    public function index()
    {       
        $apiUrl = API_URL . '/v1/reseller/get_reseller';

        $apiData = bedapi($apiUrl);


        $data = array(
            'title'         => NAMETITLE . ' - Reseller',
            'is_login'      => false,
            'content'       => 'content/reseller/reseller_view',
            'extra'         => 'content/reseller/js/js_index',
            'reseller_data' => $apiData,
            'activeMenu'    => 'reseller',
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function addreseller()
        {
            if ($this->input->post()) {

                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('kota'    ,'Kota'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('tgllahir','Tanggal Lahir' ,'required|trim');
                $this->form_validation->set_rules('plafon'  ,'Plafon'        ,'required|trim');
                $this->form_validation->set_rules('email'   ,'Email'         ,'required|trim');
                $this->form_validation->set_rules('passwd'  ,'Password'      ,'required|trim|min_length[8]|regex_match[/[0-9]/]');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('tambaherror', validation_errors());
                    redirect('reseller/addreseller');
                return;
                };

                $password = $this->security->xss_clean($this->input->post('passwd'));
                $hashedPassword = sha1($password);

                $resellerData = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'kota'      => $this->security->xss_clean($this->input->post('kota')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'tgllahir'  => $this->security->xss_clean($this->input->post('tgllahir')),
                    'plafon'    => $this->security->xss_clean($this->input->post('plafon')),
                    'email'     => $this->security->xss_clean($this->input->post('email')),
                    'passwd'    => $hashedPassword,
            );
                $apiUrl = API_URL . '/v1/reseller/add_reseller';

                $postData = json_encode($resellerData);

                $apiResponse = bedapi($apiUrl, $postData);

                if ($apiResponse && isset($apiResponse->codes) && $apiResponse->codes === '200') {
                    redirect('reseller');
                } else {
                    $data = array(
                        'title'     => NAMETITLE . ' - Add Reseller',
                        'is_login'  => false,
                        'content'   => 'content/reseller/addreseller_view',
                        'extra'     => 'content/reseller/js/js_index',
                        'activeMenu'=> 'reseller',
                        'tambaherror'     => 'Gagal Menambah Reseller, coba lagi.',
                    );
                    $this->load->view('layout/wrapper', $data);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add Reseller',
                    'is_login'      => false,
                    'content'       => 'content/reseller/addreseller_view',
                    'extra'         => 'content/reseller/js/js_index',
                    'activeMenu'    => 'reseller',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    public function editreseller($email)
        {
            $apiUrl = API_URL . '/v1/reseller/getby_email?email=' . ($email);
            $reseller_data = bedapi($apiUrl);

            if (!$reseller_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('kota'    ,'Kota'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('tgllahir','Tanggal Lahir' ,'required|trim');
                $this->form_validation->set_rules('plafon'  ,'Plafon'        ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('reseller/editreseller/' . $email);
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
                    'plafon'    => $this->security->xss_clean($this->input->post('plafon')),
                );
                $apiUpdateUrl = API_URL . '/v1/reseller/update_reseller?email=' . ($email);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->status) && $apiResponse->code ==='200') {
                    redirect('reseller');
                } else {
                    redirect('reseller/editreseller/' . $email);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit Reseller',
                    'is_login'      => false,
                    'content'       => 'content/reseller/editreseller_view',
                    'extra'         => 'content/reseller/js/js_index',
                    'activeMenu'    => 'reseller',
                    'reseller_data' => $reseller_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }

}