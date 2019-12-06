<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Supplier_model', 'supp_model');
        
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()){
            $rows = $this->supp_model->supplier_list();
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }
        $data['title']      = "Supplier / Distributor";
        $data['content']    = "index";
        $this->load->view('default', $data);
    }

    public function save()
    {
        $supplierCode           = $this->input->post('supplierCode');
        $supplierName           = $this->input->post('supplierName');
        $supplierAddress        = $this->input->post('supplierAddress');
        $supplierPhone          = $this->input->post('supplierPhone');
        $supplierFax            = $this->input->post('supplierFax');
        $supplierContactPerson  = $this->input->post('supplierContactPerson');
        $supplierCPHp           = $this->input->post('supplierCPHp');
        $supplierStatus         = $this->input->post('supplierStatus');
        
        $data   = array(
            'supplierCode'          => $supplierCode,
            'supplierName'          => $supplierName,
            'supplierAddress'       => $supplierAddress,
            'supplierPhone'         => $supplierPhone,
            'supplierFax'           => $supplierFax,
            'supplierContactPerson' => $supplierContactPerson,
            'supplierCPHp'          => $supplierCPHp,
            'supplierStatus'        => $supplierStatus
        );
        
        $insert = $this->supp_model->create($data);
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
        $supplierID    = $this->input->post('supplierID');
        
        $key    = array('supplierID' => $supplierID);
        $row    = $this->supp_model->read_by($key);

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
        $supplierID             = $this->input->post('supplierID');
        $supplierCode           = $this->input->post('supplierCode');
        $supplierName           = $this->input->post('supplierName');
        $supplierAddress        = $this->input->post('supplierAddress');
        $supplierPhone          = $this->input->post('supplierPhone');
        $supplierFax            = $this->input->post('supplierFax');
        $supplierContactPerson  = $this->input->post('supplierContactPerson');
        $supplierCPHp           = $this->input->post('supplierCPHp');
        $supplierStatus         = $this->input->post('supplierStatus');
        
        $key    = array('supplierID' => $supplierID);
        $data   = array(
            'supplierCode'          => $supplierCode,
            'supplierName'          => $supplierName,
            'supplierAddress'       => $supplierAddress,
            'supplierPhone'         => $supplierPhone,
            'supplierFax'           => $supplierFax,
            'supplierContactPerson' => $supplierContactPerson,
            'supplierCPHp'          => $supplierCPHp,
            'supplierStatus'        => $supplierStatus
        );
        
        $update = $this->supp_model->update($key, $data);
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
        $supplierID    = $this->input->post('supplierID');
        
        $key    = array('supplierID' => $supplierID);
        $this->supp_model->delete($key);

        $response['code']   = 200;
        $response['msg']    = "Berhasil menghapus data";

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function generate_supplier_code()
    {
        $supplierCode = autonumber('as_suppliers', 'supplierCode', 'AS');

        $response['code']   = 200;
        $response['msg']    = "Success";
        $response['data']   = $supplierCode;

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

}

/* End of file Supplier.php */
