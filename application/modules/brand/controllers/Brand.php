<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Brand_model', 'brand_model');
        
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()){
            $rows = $this->brand_model->brand_list();
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }
        $data['title']      = "Kategori";
        $data['content']    = "index";
        $this->load->view('default', $data);
    }

    public function save()
    {
        $brandName   = $this->input->post('brandName');
        $brandStatus = $this->input->post('brandStatus');
        
        $data   = array(
            'brandName'      => $brandName,
            'brandStatus'    => $brandStatus
        );
        
        $insert = $this->brand_model->create($data);
        if($insert > 0) {
            $response['code']   = 200;
            $response['msg']    = "Berhasil menyimpan data";
        } else {
            $response['code']   = 500;
            $response['msg']    = "Gagal menyimpan data";
        }

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function edit()
    {
        $brandID    = $this->input->post('brandID');
        
        $key    = array('brandID' => $brandID);
        $row    = $this->brand_model->read_by($key);

        $response   = array(
            'code'  => 200,
            'msg'   => 'Success',
            'data'  => $row->row()
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function update()
    {
        $brandID     = $this->input->post('brandID');
        $brandName   = $this->input->post('brandName');
        $brandStatus = $this->input->post('brandStatus');
        
        $key    = array('brandID' => $brandID);
        $data   = array(
            'brandName'      => $brandName,
            'brandStatus'    => $brandStatus
        );
        
        $update = $this->brand_model->update($key, $data);
        if($update > 0) {
            $response['code']   = 200;
            $response['msg']    = "Berhasil mengubah data";
        } else {
            $response['code']   = 500;
            $response['msg']    = "Gagal mengubah data";
        }

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function delete()
    {
        $brandID    = $this->input->post('brandID');
        
        $key    = array('brandID' => $brandID);
        $this->brand_model->delete($key);

        $response['code']   = 200;
        $response['msg']    = "Berhasil menghapus data";

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

}

/* End of file Brand.php */
