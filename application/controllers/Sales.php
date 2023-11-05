<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sales extends CI_Controller
{

    public function index()
    {

        $apiUrl = API_URL . '/v1/sales/get_sales';

        $apiData = bedapi($apiUrl);


        $data = array(
            'title'     => NAMETITLE . ' - sales',
            'is_login'  => false,
            'content'   => 'content/sales/sales_view',
            'extra'     => 'content/sales/js/js_index',
            'sales_data' => $apiData,
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side3'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addsales()
        {
            
            $apiUrl = API_URL . '/v1/area/getArea';
            $area_data  = bedapi($apiUrl);

            if ($this->input->post()) {

                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('kota'    ,'Kota'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('tgllahir','Tanggal Lahir' ,'required|trim');
                $this->form_validation->set_rules('area'    ,'Area'          ,'required|trim');
                $this->form_validation->set_rules('komisi'  ,'Komisi'        ,'required|trim');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('tambaherror', validation_errors());
                    redirect('sales/addsales');
                return;
                };

                $password = $this->security->xss_clean($this->input->post('passwd'));
                $hashedPassword = sha1($password);

                $salesData = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'kota'      => $this->security->xss_clean($this->input->post('kota')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'tgllahir'  => $this->security->xss_clean($this->input->post('tgllahir')),
                    'area'      => $this->security->xss_clean($this->input->post('area')),
                    'komisi'    => $this->security->xss_clean($this->input->post('komisi')),
            );
                $apiUrl = API_URL . '/v1/sales/add_sales';

                $postData = json_encode($salesData);

                $apiResponse = bedapi($apiUrl, $postData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'sales berhasil di tambah.');
                    redirect('sales');
                } else {
                    $this->session->set_flashdata('message', 'gagal menambah sales.');
                    redirect('sales/editsales/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add sales',
                    'is_login'      => false,
                    'content'       => 'content/sales/addsales_view',
                    'extra'         => 'content/sales/js/js_index',
                    'activeMenu'    => 'sales',
                    'area_data'     => $area_data,
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side3'         => 'active',
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    public function editsales($id)
        {
            $apiUrl = API_URL . '/v1/area/getArea';
            $area_data  = bedapi($apiUrl);
            $apiUrl = API_URL . '/v1/sales/getby_id?id=' . ($id);
            $sales_data = bedapi($apiUrl);

            if (!$sales_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('kota'    ,'Kota'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('tgllahir','Tanggal Lahir' ,'required|trim');
                $this->form_validation->set_rules('area'    ,'Area'          ,'required|trim');
                $this->form_validation->set_rules('komisi'  ,'Komisi'        ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('sales/editsales/' . $id);
                    return;
                }

                $updated_data = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'kota'      => $this->security->xss_clean($this->input->post('kota')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'tgllahir'  => $this->security->xss_clean($this->input->post('tgllahir')),
                    'area'      => $this->security->xss_clean($this->input->post('area')),
                    'komisi'    => $this->security->xss_clean($this->input->post('komisi')),
                );
                $apiUpdateUrl = API_URL . '/v1/sales/update_sales?id=' . ($id);
                
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'sales berhasil di ubah.');
                    redirect('sales');
                } else {
                    $this->session->set_flashdata('message', 'gagal merubah sales.');
                    redirect('sales/editsales/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit sales',
                    'is_login'      => false,
                    'content'       => 'content/sales/editsales_view',
                    'extra'         => 'content/sales/js/js_index',
                    'sales_data'    => $sales_data,
                    'area_data'     => $area_data,
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side3'         => 'active',
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletesales($id)
        {
            $apiUrl = API_URL . '/v1/sales/delete_sales?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'sales berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus sales');
            }

            redirect('sales');
        }
}