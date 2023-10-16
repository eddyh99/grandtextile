<?php
defined('BASEPATH') or exit('No direct script access allowed');

class clienthotel extends CI_Controller
{

    public function index()
    {

        $apiUrl = API_URL . '/v1/hotel/get_hotel';

        $apiData = bedapi($apiUrl); 

        $data = array(
            'title'     => NAMETITLE . ' - clienthotel',
            'is_login'  => false,
            'content'   => 'content/clienthotel/clienthotel_view',
            'extra'     => 'content/clienthotel/js/js_index',
            'clienthotel_data' => $apiData,
            'activeMenu'  => 'clienthotel',
            
        );
        $this->load->view('layout/wrapper', $data);
    }
         public function addclienthotel()
        {
            
        $apiUrl = API_URL . '/v1/hotel/get_cphotel';
        $cp_data = bedapi($apiUrl);
        $apiUrl = API_URL . '/v1/area/getArea';
        $area_data  = bedapi($apiUrl);

            if ($this->input->post()) {
                $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
                $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
                $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
                $this->form_validation->set_rules('telp', 'Telp', 'required|trim');
                $this->form_validation->set_rules('area', 'Area', 'required|trim');
                $this->form_validation->set_rules('cphotel[0][cp_id]' ,'CpHotel'       ,'required|trim');
                
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('clienthotel/addclienthotel');
                    return;
                }

                

                $clienthotelData = array(
                    'nama' => $this->security->xss_clean($this->input->post('nama')),
                    'alamat' => $this->security->xss_clean($this->input->post('alamat')),
                    'kota' => $this->security->xss_clean($this->input->post('kota')),
                    'telp' => $this->security->xss_clean($this->input->post('telp')),
                    'area' => $this->security->xss_clean($this->input->post('area')),
                    'cphotel[0][cp_id]'   => $this->security->xss_clean($this->input->post('cphotel[0][cp_id]')), 
                );

                $apiUrl = API_URL . '/v1/hotel/add_hotel';

                $postData = json_encode($clienthotelData);
                $apiResponse = bedapi($apiUrl, $postData);


                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'sukses');
                    redirect('clienthotel');
                } else {
                    $this->session->set_flashdata('messeage', 'gagal');
                    redirect('clienthotel/addclienthotel');
                }
            } else {
                $data = array(
                    'title' => NAMETITLE . ' - Add clienthotel',
                    'is_login' => false,
                    'content' => 'content/clienthotel/addclienthotel_view',
                    'extra' => 'content/clienthotel/js/js_index',
                    'activeMenu' => 'clienthotel',
                    'area_data'     => $area_data,
                    'cp_data'     => $cp_data,
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    public function editclienthotel($id)
        {
            $apiUrl = API_URL . '/v1/hotel/getby_hotelid?id=' . ($id);
            $clienthotel_data = bedapi($apiUrl);
            $apiUrl = API_URL . '/v1/hotel/get_cphotel';
            $cp_data = bedapi($apiUrl);
            $apiUrl = API_URL . '/v1/area/getArea';
            $area_data  = bedapi($apiUrl);
            if (!$clienthotel_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('nama'    ,'Nama'          ,'required|trim');
                $this->form_validation->set_rules('alamat'  ,'Alamat'        ,'required|trim');
                $this->form_validation->set_rules('kota'    ,'Kota'          ,'required|trim');
                $this->form_validation->set_rules('telp'    ,'Telp'          ,'required|trim');
                $this->form_validation->set_rules('area'    ,'Area'          ,'required|trim');
                $this->form_validation->set_rules('cphotel[0][cp_id]' ,'CpHotel'       ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('clienthotel/editclienthotel/' . $id);
                    return;
                }

                $updated_data = array(
                    'nama'      => $this->security->xss_clean($this->input->post('nama')),
                    'alamat'    => $this->security->xss_clean($this->input->post('alamat')),
                    'kota'      => $this->security->xss_clean($this->input->post('kota')),
                    'telp'      => $this->security->xss_clean($this->input->post('telp')),
                    'area'      => $this->security->xss_clean($this->input->post('area')),
                    'cphotel[0][cp_id]'   => $this->security->xss_clean($this->input->post('cphotel[0][cp_id]')), 
                );
                $apiUpdateUrl = API_URL . '/v1/clienthotel/update_clienthotel?id=' . ($id);
                $apiUpdateData = json_encode($updated_data);
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);

                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    $this->session->set_flashdata('message', 'sukses');
                    redirect('clienthotel');
                } else {
                    $this->session->set_flashdata('messeage', 'gagal');
                    redirect('clienthotel/edit');
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit clienthotel',
                    'is_login'      => false,
                    'content'       => 'content/clienthotel/editclienthotel_view',
                    'extra'         => 'content/clienthotel/js/js_index',
                    'activeMenu'    => 'clienthotel',
                    'clienthotel_data' => $clienthotel_data,
                    'area_data'     => $area_data,
                    'cp_data'     => $cp_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
}