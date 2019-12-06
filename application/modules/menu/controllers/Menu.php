<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Menu Controller
 * @author seagate25 <sigidh.budi@gmail.com>
 * @copyright 2019 Sigit Budi Setiyono
 */
class Menu extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Menu_model', 'menu_model');
        
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()) {
            $rows = $this->menu_model->menu_list();
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }

        $key    = array('menuParentID' => 0);
        $menus  = $this->menu_model->read_by($key);

        $data['title']      = "Menu";
        $data['content']    = "index";
        $data['menus']      = $menus->result();
        $this->load->view('default', $data);
    }
    
    public function save()
    {
        $menuName       = $this->input->post('menuName');
        $menuParentID   = $this->input->post('menuParentID');
        $menuUri        = $this->input->post('menuUri');
        $menuIcon       = $this->input->post('menuIcon');
        $menuOrder      = $this->input->post('menuOrder');
        $menuStatus     = $this->input->post('menuStatus');
        
        $data   = array(
            'menuName'      => $menuName,
            'menuParentID'  => $menuParentID,
            'menuUri'       => empty($menuUri) ? '#' : $menuUri,
            'menuIcon'      => empty($menuIcon) ? '' : $menuIcon,
            'menuOrder'     => $menuOrder,
            'menuStatus'    => $menuStatus
        );

        $insert = $this->menu_model->create($data);
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
        $menuID = $this->input->post('menuID');
        
        $key    = array('menuID' => $menuID);
        $read   = $this->menu_model->read_by($key);
        $data   = $read->row();

        $response = array(
            'code'  => 200,
            'msg'   => 'Success',
            'data'  => $data
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function update()
    {
        $menuID         = $this->input->post('menuID');
        $menuName       = $this->input->post('menuName');
        $menuParentID   = $this->input->post('menuParentID');
        $menuUri        = $this->input->post('menuUri');
        $menuIcon       = $this->input->post('menuIcon');
        $menuOrder      = $this->input->post('menuOrder');
        $menuStatus     = $this->input->post('menuStatus');
        
        $key    = array('menuID' => $menuID);
        $data   = array(
            'menuName'      => $menuName,
            'menuParentID'  => $menuParentID,
            'menuUri'       => empty($menuUri) ? '#' : $menuUri,
            'menuIcon'      => empty($menuIcon) ? '' : $menuIcon,
            'menuOrder'     => $menuOrder,
            'menuStatus'    => $menuStatus
        );

        $update = $this->menu_model->update($key, $data);
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
        $menuID = $this->input->post('menuID');
        $key    = array('menuID' => $menuID);

        $this->menu_model->delete($key);

        $response['code']   = 200;
        $response['msg']    = "Berhasil menghapus data";

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

}

/* End of file Menu.php */
