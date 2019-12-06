<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Privillege_model Model
 * 
 * @author seagate25 <sigidh.budi@gmail.com>
 * @copyright 2019 Sigit Budi Setiyono
 */
class Privillege_model extends CI_Model {

    /**
     * Set table name
     *
     * @var string
     */
    protected $table = 'as_auth';

    public function auth_list(Int $id)
    {
        $roles  = array();
        if($id === 0) {
            $roles = array();
        } else {
            $menu_level_1 = $this->get_menu();
            foreach($menu_level_1 as $level_1) {

                $checked_level_1    = '';
                $view_level_1       = '';
                $add_level_1        = '';
                $edit_level_1       = '';
                $delete_level_1     = '';

                $privillege = $this->get_roles((int)$id, (int)$level_1->menuID);
                ((int)$privillege['authMenuID'] === (int)$level_1->menuID) ? $checked_level_1 = 'checked' : $checked_level_1 = '';
                ((int)$privillege['authView'] === 1) ? $view_level_1 = 'checked' : $view_level_1 = '';
                ((int)$privillege['authCreate'] === 1) ? $add_level_1 = 'checked' : $add_level_1 = '';
                ((int)$privillege['authUpdate'] === 1) ? $edit_level_1 = 'checked' : $edit_level_1 = '';
                ((int)$privillege['authDelete'] === 1) ? $delete_level_1 = 'checked' : $delete_level_1 = '';

                $level_1->menu_checked      = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="menu[]" value="'.$level_1->menuID.'" '.$checked_level_1.'>&nbsp;<span></span></label>';
                $level_1->view_checked      = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="view[]" value="'.$level_1->menuID.'" '.$view_level_1.'>&nbsp;<span></span></label>';
                $level_1->add_checked       = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="add[]" value="'.$level_1->menuID.'" '.$add_level_1.'>&nbsp;<span></span></label>';
                $level_1->edit_checked      = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="edit[] "value="'.$level_1->menuID.'" '.$edit_level_1.'>&nbsp;<span></span></label>';
                $level_1->delete_checked    = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="delete[]" value="'.$level_1->menuID.'" '.$delete_level_1.'>&nbsp;<span></span></label>';
                $roles[] = $level_1;
                
                $menu_level_2 = $this->get_menu((int)$level_1->menuID);
                foreach($menu_level_2 as $level_2) {

                    $checked_level_2    = '';
                    $view_level_2       = '';
                    $add_level_2        = '';
                    $edit_level_2       = '';
                    $delete_level_2     = '';

                    $privillege = $this->get_roles((int)$id, (int)$level_2->menuID);
                    ((int)$privillege['authMenuID'] === (int)$level_2->menuID) ? $checked_level_2 = 'checked' : $checked_level_2 = '';
                    ((int)$privillege['authView'] === 1) ? $view_level_2 = 'checked' : $view_level_2 = '';
                    ((int)$privillege['authCreate'] === 1) ? $add_level_2 = 'checked' : $add_level_2 = '';
                    ((int)$privillege['authUpdate'] === 1) ? $edit_level_2 = 'checked' : $edit_level_2 = '';
                    ((int)$privillege['authDelete'] === 1) ? $delete_level_2 = 'checked' : $delete_level_2 = '';

                    $level_2->menuName          = "&emsp;-&ensp;".$level_2->menuName;
                    $level_2->menu_checked      = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="menu[]" value="'.$level_2->menuID.'" '.$checked_level_2.'>&nbsp;<span></span></label>';
                    $level_2->view_checked      = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="view[]" value="'.$level_2->menuID.'" '.$view_level_2.'>&nbsp;<span></span></label>';
                    $level_2->add_checked       = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="add[]" value="'.$level_2->menuID.'" '.$add_level_2.'>&nbsp;<span></span></label>';
                    $level_2->edit_checked      = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="edit[] "value="'.$level_2->menuID.'" '.$edit_level_2.'>&nbsp;<span></span></label>';
                    $level_2->delete_checked    = '<label class="kt-checkbox kt-checkbox--bold"><input type="checkbox" name="delete[]" value="'.$level_2->menuID.'" '.$delete_level_2.'>&nbsp;<span></span></label>';
                    $roles[] = $level_2;
                }
            }
        }

        return array('data' => $roles);
    }

    public function get_menu(Int $id = 0)
    {
        $this->db->select('menuID, menuParentID, menuName');
        $this->db->from('as_menu');
        $this->db->where(array('menuParentID' => $id, 'menuStatus' => 1));
        $this->db->order_by('menuOrder', 'asc');
        
        return $this->db->get()->result();
    }

    public function get_roles(Int $authGroupID, Int $menuID)
    {
        $this->db->select('authMenuID, authView, authCreate, authUpdate, authDelete');
        $this->db->from($this->table);
        $this->db->where(array('authGroupID' => $authGroupID, 'authMenuID' => $menuID));
        $this->db->order_by('authID', 'asc');
        
        return $this->db->get()->row_array();
    }

    public function insert_batch(Array $data)
    {
        $this->db->insert_batch($this->table, $data);
    }

    public function delete(Int $id)
    {
        $this->db->where('authGroupID', $id);
        $this->db->delete($this->table);
    }

    public function get_group_role(Int $id)
    {
        $key    = array('authGroupID' => $id);
        
        $this->db->where($key);
        $query = $this->db->get($this->table);
        
        return $query->num_rows();
    }

}

/* End of file Privillege_model.php */
