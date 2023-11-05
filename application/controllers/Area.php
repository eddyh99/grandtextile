<?php
defined('BASEPATH') or exit('No direct script access allowed');

class area extends CI_Controller
{

    public function index()
    {
        $apiUrl = API_URL . '/v1/area/getArea';

        $apiData = bedapi($apiUrl);
        $data = array(
            'title'     => NAMETITLE . ' - area',
            'is_login'  => false,
            'content'   => 'content/area/area_view',
            'extra'     => 'content/area/js/js_index',
            'area_data' => $apiData,
            'colmas'        => 'show',
            'menmas'        => 'active',
            'side2'         => 'active',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addarea()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('area', 'Area', 'required|trim');

            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('message', validation_errors(' ', ' '));
                redirect('area/addarea');
                return;
            }

            $areaData = array(
                'area' => $this->security->xss_clean($this->input->post('area')),
            );
            $apiUrl = API_URL . '/v1/area/add_area';

            $postData = json_encode($areaData);

            $apiResponse = bedapi($apiUrl, $postData);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Area berhasil di tambahkan.');
                redirect('area');
            } else {
                $this->session->set_flashdata('message', 'Gagal Menambah area, coba lagi.');
                redirect('area/addarea');
            }
        } else {
            $data = array(
                'title'         => NAMETITLE . ' - Add area',
                'is_login'      => false,
                'content'       => 'content/area/addarea_view',
                'extra'         => 'content/area/js/js_index',
                'colmas'        => 'show',
                'menmas'        => 'active',
                'side2'         => 'active',
            );
            $this->load->view('layout/wrapper', $data);
        }
    }
    public function editarea($id)
        {
            $apiUrl = API_URL . '/v1/area/getby_areaid?id=' . ($id);
            $area_data = bedapi($apiUrl);

            if (!$area_data) {
                show_404();
                return;
            }
            if ($this->input->post()) {
                $this->form_validation->set_rules('area'    ,'Area'          ,'required|trim');
                
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('message', validation_errors());
                    redirect('area/editarea/' . $id);
                    return;
                }
                $updated_data = array(
                    'area'      => $this->security->xss_clean($this->input->post('area')),
                );
                
                $apiUpdateUrl = API_URL . '/v1/area/update_area?id=' . ($id);
                
                $apiUpdateData = json_encode($updated_data);
                
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);
                
                if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                    
                    $this->session->set_flashdata('message', 'Berhasil Merubah area.');
                    redirect('area');
                } else {
                    $this->session->set_flashdata('message', 'Gagal Menambah area, coba lagi.');
                    redirect('area/editarea/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit area',
                    'is_login'      => false,
                    'content'       => 'content/area/editarea_view',
                    'extra'         => 'content/area/js/js_index',
                    'area_data'     => $area_data,
                    'colmas'        => 'show',
                    'menmas'        => 'active',
                    'side2'         => 'active',
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
        public function deletearea($id)
        {
            $apiUrl = API_URL . '/v1/area/delete_area?id=' . ($id);

            $apiResponse = bedapi($apiUrl);

            if ($apiResponse && isset($apiResponse->code) && $apiResponse->code === '200') {
                $this->session->set_flashdata('message', 'Area berhasil di hapus.');
            } else {
                $this->session->set_flashdata('message', 'gagal menghapus Area');
            }

            redirect('area');
        }
}