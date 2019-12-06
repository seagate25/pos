<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Group Controller
 * @author seagate25 <sigidh.budi@gmail.com>
 * @copyright 2019 Sigit Budi Setiyono
 */
class Category extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Category_model', 'category_model');
        
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()){
            $rows = $this->category_model->category_list();
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }
        $data['title']      = "Kategori";
        $data['content']    = "index";
        $this->load->view('default', $data);
    }

    public function save()
    {
        $categoryName   = $this->input->post('categoryName');
        $categoryStatus = $this->input->post('categoryStatus');
        
        $data   = array(
            'categoryName'      => $categoryName,
            'categoryStatus'    => $categoryStatus
        );
        
        $insert = $this->category_model->create($data);
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
        $categoryID    = $this->input->post('categoryID');
        
        $key    = array('categoryID' => $categoryID);
        $row    = $this->category_model->read_by($key);

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
        $categoryID     = $this->input->post('categoryID');
        $categoryName   = $this->input->post('categoryName');
        $categoryStatus = $this->input->post('categoryStatus');
        
        $key    = array('categoryID' => $categoryID);
        $data   = array(
            'categoryName'      => $categoryName,
            'categoryStatus'    => $categoryStatus
        );
        
        $update = $this->category_model->update($key, $data);
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
        $categoryID    = $this->input->post('categoryID');
        
        $key    = array('categoryID' => $categoryID);
        $this->category_model->delete($key);

        $response['code']   = 200;
        $response['msg']    = "Berhasil menghapus data";

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

}

/* End of file Category.php */
