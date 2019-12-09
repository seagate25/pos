<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Member_model', 'member_model');
        
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()){
            $rows = $this->member_model->member_list();
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }
        $data['title']      = "Member";
        $data['content']    = "index";
        $this->load->view('default', $data);
    }

    public function save()
    {
        $memberCode     = $this->input->post('memberCode');
        $memberFullName = $this->input->post('memberFullName');
        $memberAddress  = $this->input->post('memberAddress');
        $memberPhone    = $this->input->post('memberPhone');
        
        $data   = array(
            'memberCode'        => $memberCode,
            'memberFullName'    => $memberFullName,
            'memberAddress'     => $memberAddress,
            'memberPhone'       => $memberPhone
        );
        
        $insert = $this->member_model->create($data);
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
        $memberID    = $this->input->post('memberID');
        
        $key    = array('memberID' => $memberID);
        $row    = $this->member_model->read_by($key);

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
        $memberID           = $this->input->post('memberID');
        $memberFullName     = $this->input->post('memberFu$memberFullName');
        $memberAddress      = $this->input->post('memberAddress');
        $memberPhone        = $this->input->post('memberPhone');
        
        $key    = array('memberID' => $memberID);
        $data   = array(
            'memberFullName'    => $memberFullName,
            'memberAddress'     => $memberAddress,
            'memberPhone'       => $memberPhone
        );
        
        $update = $this->member_model->update($key, $data);
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
        $memberID    = $this->input->post('memberID');
        
        $key    = array('memberID' => $memberID);
        $this->member_model->delete($key);

        $response['code']   = 200;
        $response['msg']    = "Berhasil menghapus data";

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function generate_member_code()
    {
        $memberCode = autonumber('as_members', 'memberCode', 'MBR');

        $response['code']   = 200;
        $response['msg']    = "Success";
        $response['data']   = $memberCode;

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

}

/* End of file Member.php */
