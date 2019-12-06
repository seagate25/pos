<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Privillege Controller
 * 
 * @author seagate25 <sigidh.budi@gmail.com>
 * @copyright 2019 Sigit Budi Setiyono
 */
class Privillege extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Privillege_model', 'auth_model');
        $this->load->model('group/Group_model', 'group_model');
        
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()) {
            $authGroupID    = $this->input->post('authGroupID');
            $rows           = $this->auth_model->auth_list((int)$authGroupID);
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }
        $data['title']      = "Hak Akses Grup";
        $data['content']    = "index";
        $data['groups']     = $this->group_model->read_all();
        $this->load->view('default', $data);     
    }

    public function save()
    {
        $group_id = $this->input->post('authGroupID');

        $insert = array();
        $update = array();

        $q = $this->auth_model->get_group_role((int)$group_id);
        if($q > 0) {
            
            $this->auth_model->delete($group_id);

            $view       = $this->input->post('view');
            $add        = $this->input->post('add');
            $edit       = $this->input->post('edit');
            $delete     = $this->input->post('delete');

            $menu       = $this->input->post('menu');

            if (!is_array($view)) { $view = array(); }
            if (!is_array($add)) { $add = array(); }
            if (!is_array($edit)) { $edit = array(); }
            if (!is_array($delete)) { $delete = array(); }
            
            $result1 = array_intersect($menu, $view);
            $result2 = array_intersect($menu, $add);
            $result3 = array_intersect($menu, $edit);
            $result4 = array_intersect($menu, $delete);
            
            foreach($menu as $m_val) 
            {
                if (in_array($m_val, $result1)) { $acc_view = 1; } else { $acc_view = 0; }
                if (in_array($m_val, $result2)) { $acc_add = 1; } else { $acc_add = 0; }
                if (in_array($m_val, $result3)) { $acc_edit = 1; } else { $acc_edit = 0; }
                if (in_array($m_val, $result4)) { $acc_delete = 1; } else { $acc_delete = 0; }

                $data_update = array(
                    'authGroupID'   => $group_id,
                    'authMenuID'    => $m_val,
                    'authView'      => $acc_view,
                    'authCreate'    => $acc_add,
                    'authUpdate'    => $acc_edit,
                    'authDelete'    => $acc_delete,
                    'createdUserID' => $this->session->userdata('id'),
                    'createdDate'   => date('Y-m-d H:i:s')
                );

                $update[]   = $data_update;
            }
            $this->auth_model->insert_batch($update);
            redirect("privillege");
        } else {
            $view       = $this->input->post('view');
            $add        = $this->input->post('add');
            $edit       = $this->input->post('edit');
            $delete     = $this->input->post('delete');

            $menu       = $this->input->post('menu');

            if (!is_array($view)) { $view = array(); }
            if (!is_array($add)) { $add = array(); }
            if (!is_array($edit)) { $edit = array(); }
            if (!is_array($delete)) { $delete = array(); }
            
            $result1 = array_intersect($menu, $view);
            $result2 = array_intersect($menu, $add);
            $result3 = array_intersect($menu, $edit);
            $result4 = array_intersect($menu, $delete);
            
            foreach($menu as $m_val) 
            {
                if (in_array($m_val, $result1)) { $acc_view = 1; } else { $acc_view = 0; }
                if (in_array($m_val, $result2)) { $acc_add = 1; } else { $acc_add = 0; }
                if (in_array($m_val, $result3)) { $acc_edit = 1; } else { $acc_edit = 0; }
                if (in_array($m_val, $result4)) { $acc_delete = 1; } else { $acc_delete = 0; }

                $data_insert = array(
                    'authGroupID'   => $group_id,
                    'authMenuID'    => $m_val,
                    'authView'      => $acc_view,
                    'authCreate'    => $acc_add,
                    'authUpdate'    => $acc_edit,
                    'authDelete'    => $acc_delete,
                    'createdUserID' => $this->session->userdata('id'),
                    'createdDate'   => date('Y-m-d H:i:s')
                );

                $insert[]   = $data_insert;
            }
            $this->auth_model->insert_batch($insert);
            redirect("privillege");
        }
    }

}

/* End of file Privillege.php */
