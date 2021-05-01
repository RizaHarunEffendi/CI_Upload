<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }
    

    public function index()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('upload/index');
        } else {
            $data = [
                    'judul' => $this->input->post('judul'),
                    'gambar' => $this->upload_image()  
                ];
                $this->db->insert('tbl_galeri', $data);
                $this->session->set_flashdata('message', 'New Image Added!');
                redirect('upload');
            }
    }    
    
    private function upload_image()
    {
        //rename file
        $judul = $this->input->post('judul');
        $new_name = date('Y-m-d').'-'.$judul; 
        // konfigurasi upload file
        $config['upload_path']      = './assets/images/';
        $config['allowed_types']    = 'gif|jpg';
        $config['max_size']         = '2048';
        $config['overwrite']        = true;
        $config['file_name']         = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('message', $error);
            redirect('upload');
        }else{
             // upload foto baru
            return $this->upload->data('file_name');
        }
    }
    

}

/* End of file Upload.php */
