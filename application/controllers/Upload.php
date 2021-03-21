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
            $upload_image = $_FILES['image'];

            if ($upload_image) {
                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = '2048';

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image')){
                    $this->session->set_flashdata('message', 'Gambar gagal diupload');
                    redirect('upload');
                }
                else{
                    $data = [
                        'judul' => $this->input->post('judul'),
                        'gambar' => $this->upload->data('file_name')  
                    ];

                    $this->db->insert('tbl_gambar', $data);
                    $this->session->set_flashdata('message', 'New Image Added!');
                    redirect('upload');
                }
            }
            
        }
        

                
    }

}

/* End of file Upload.php */
