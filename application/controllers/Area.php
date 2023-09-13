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
            'activeMenu'  => 'area',
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function addarea()
        {
            if ($this->input->post()) {

                $this->form_validation->set_rules('area'    ,'Area'          ,'required|trim');

                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('tambaherror', validation_errors());
                    redirect('area/addarea');
                return;
                };

                $areaData = array(
                    'area'      => $this->security->xss_clean($this->input->post('area')),
            );
                $apiUrl = API_URL . '/v1/area/add_area';

                $postData = json_encode($areaData);

                $apiResponse = bedapi($apiUrl, $postData);

                if ($apiResponse && isset($apiResponse->status) && $apiResponse->status === 'success') {
                    $this->session->set_flashdata('tambahsuccess', 'Area added successfully.');
                    redirect('area');
                } else {
                    $data = array(
                        'title'     => NAMETITLE . ' - Add area',
                        'is_login'  => false,
                        'content'   => 'content/area/addarea_view',
                        'extra'     => 'content/area/js/js_index',
                        'activeMenu'=> 'area',
                        'tambaherror'     => 'Gagal Menambah area, coba lagi.',
                    );
                    $this->load->view('layout/wrapper', $data);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Add area',
                    'is_login'      => false,
                    'content'       => 'content/area/addarea_view',
                    'extra'         => 'content/area/js/js_index',
                    'activeMenu'    => 'area',
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
                    $this->session->set_flashdata('error', validation_errors());
                    redirect('area/editarea/' . $id);
                    return;
                }

                $updated_data = array(
                    'area'      => $this->security->xss_clean($this->input->post('area')),
                );

                $apiUpdateUrl = API_URL . '/v1/area/update_area?id=' . ($id);
                
                $apiUpdateData = json_encode($updated_data);
                
                $apiResponse = bedapi($apiUpdateUrl, $apiUpdateData);
                

                if ($apiResponse && isset($apiResponse->status) && $apiResponse->status === 'success') {
                    redirect('area');
                } else {
                    redirect('area/editarea/' . $id);
                }
            } else {
                $data = array(
                    'title'         => NAMETITLE . ' - Edit area',
                    'is_login'      => false,
                    'content'       => 'content/area/editarea_view',
                    'extra'         => 'content/area/js/js_index',
                    'activeMenu'    => 'area',
                    'area_data' => $area_data,
                );

                $this->load->view('layout/wrapper', $data);
            }
        }
}