<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Group Controller
 * @author seagate25 <sigidh.budi@gmail.com>
 * @copyright 2019 Sigit Budi Setiyono
 */
class Group extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Group_model', 'group_model');
        
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()){
            $rows = $this->group_model->group_list();
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }
        $data['title']      = "Grup User";
        $data['content']    = "index";
        $this->load->view('default', $data);
    }

    public function save()
    {
        $groupName  = $this->input->post('groupName');
        
        $data   = array('groupName' => $groupName);
        
        $insert = $this->group_model->create($data);
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
        $groupID    = $this->input->post('groupID');
        
        $key    = array('groupID' => $groupID);
        $row    = $this->group_model->read_by($key);

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
        $groupID    = $this->input->post('groupID');
        $groupName  = $this->input->post('groupName');
        
        $key    = array('groupID' => $groupID);
        $data   = array('groupName' => $groupName);
        
        $update = $this->group_model->update($key, $data);
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
        $groupID    = $this->input->post('groupID');
        
        $key    = array('groupID' => $groupID);
        $this->group_model->delete($key);

        $response['code']   = 200;
        $response['msg']    = "Berhasil menghapus data";

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

}

/* End of file Group.php */
