<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Konfirmasi_bayar extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Konfirmasi_bayar_model');
    } 

    /*
     * Listing of konfirmasi_bayar
     */
    function index()
    {
        $data['konfirmasi_bayar'] = $this->Konfirmasi_bayar_model->get_all_konfirmasi_bayar();
        
        $data['_view'] = 'konfirmasi_bayar/index';
        $this->load->view('layouts/main',$data);
    }

    public function download($bukti_bayar) { 
   force_download('./upload/'.$bukti_bayar, null);
 }
    /*
     * Adding a new konfirmasi_bayar
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'npm' => $this->input->post('npm'),
                'ijazah' => $_FILES['ijazah']['name'],
				'bukti_bayar' => $_FILES['bukti_bayar']['name'],
            );
            
            $config['upload_path']          = './upload/';
            $config['max_size']             = 500000;
            $config['allowed_types']        = 'pdf|doc|png|jpg|docx|xls|xlsx';
            $config['file_name']        = $_FILES['bukti_bayar']['name'];

            $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('bukti_bayar'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('konfirmasi_bayar/add', $error);
                }
                else
                {
            $konfirmasi_bayar_id = $this->Konfirmasi_bayar_model->add_konfirmasi_bayar($params);
            redirect('konfirmasi_bayar/index');
                }
        }
        else
        {            
            $data['_view'] = 'konfirmasi_bayar/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a konfirmasi_bayar
     */
    function edit($npm)
    {   
        // check if the konfirmasi_bayar exists before trying to edit it
        $data['konfirmasi_bayar'] = $this->Konfirmasi_bayar_model->get_konfirmasi_bayar($npm);
        
        if(isset($data['konfirmasi_bayar']['npm']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ijazah' => $this->input->post('ijazah'),
					'bukti_bayar' => $this->input->post('bukti_bayar'),
                );

                $this->Konfirmasi_bayar_model->update_konfirmasi_bayar($npm,$params);            
                redirect('konfirmasi_bayar/index');
            }
            else
            {
                $data['_view'] = 'konfirmasi_bayar/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The konfirmasi_bayar you are trying to edit does not exist.');
    } 

    /*
     * Deleting konfirmasi_bayar
     */
    function remove($npm)
    {
        $konfirmasi_bayar = $this->Konfirmasi_bayar_model->get_konfirmasi_bayar($npm);

        // check if the konfirmasi_bayar exists before trying to delete it
        if(isset($konfirmasi_bayar['npm']))
        {
            $this->Konfirmasi_bayar_model->delete_konfirmasi_bayar($npm);
            redirect('konfirmasi_bayar/index');
        }
        else
            show_error('The konfirmasi_bayar you are trying to delete does not exist.');
    }
    
}
