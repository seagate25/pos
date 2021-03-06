<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('User_model', 'user_model');
        $this->load->model('group/Group_model', 'group_model');
        
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()) {
            $rows = $this->user_model->user_list();
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }

        $data['title']      = "User";
        $data['content']    = "index";
        $data['groups']     = $this->group_model->read_all();
        $this->load->view('default', $data);
    }

    public function save()
    {
        $userNIP        = $this->input->post('userNIP');
        $userFullName   = $this->input->post('userFullName');
        $userPhone      = $this->input->post('userPhone');
        $userLevel      = $this->input->post('userLevel');
        $userName       = $this->input->post('userName');
        
        $data   = array(
            'userNIP'       => $userNIP,
            'userFullName'  => $userFullName,
            'userPhone'     => $userPhone,
            'userLevel'     => $userLevel,
            'userName'      => $userName,
            'userPassword'  => md5('password'),
            'userBlocked'   => 'N'
        );

        $insert = $this->user_model->create($data);
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
        $userID = $this->input->post('userID');
        $key    = array('userID' => $userID);

        $data   = $this->user_model->read_by($key);

        $response['code']   = 200;
        $response['msg']    = "Success";
        $response['data']   = $data->row();

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function update()
    {
        $userID         = $this->input->post('userID');
        $userNIP        = $this->input->post('userNIP');
        $userFullName   = $this->input->post('userFullName');
        $userPhone      = $this->input->post('userPhone');
        $userLevel      = $this->input->post('userLevel');
        $userName       = $this->input->post('userName');
        $userBlocked    = $this->input->post('userBlocked');
        
        $key    = array(
            'userID'    => $userID,
            'userNIP'   => $userNIP
        );

        $data   = array(
            'userNIP'       => $userNIP,
            'userFullName'  => $userFullName,
            'userPhone'     => $userPhone,
            'userLevel'     => $userLevel,
            'userName'      => $userName,
            'userBlocked'   => $userBlocked
        );

        $update = $this->user_model->update($key, $data);
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
        $userID = $this->input->post('userID');
        
        $key    = array('userID' => $userID);
        $this->user_model->delete($key);

        $response['code']   = 200;
        $response['msg']    = "Berhasil menghapus data";

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function generate_user_nip()
    {
        $userNIP = autonumber('as_users', 'userNIP', date('ymd'));

        $response['code']   = 200;
        $response['msg']    = "Success";
        $response['data']   = $userNIP;

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

}

/* End of file User.php */
