<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Get session of user
 * 
 * If user doesn't login or session expired
 * will be redirect to login page
 */
if(!function_exists('logged_in')) {

    function logged_in()
    { 
        $CI =& get_instance();
        $CI->load->library('session');
        if($CI->session->userdata('is_login') != TRUE) {
            $CI->session->sess_destroy();
            redirect('login');
        }
    }
}

/**
 * Create list of menu
 * based on user role access
 */
if(!function_exists('generate_menu')) {

    function generate_menu()
    {
        $CI =& get_instance();
        $CI->load->library('session');
        $group_id    = $CI->session->userdata('group');

        $html   = '<ul class="kt-menu__nav ">';
        $sql    = "SELECT as_menu.*, as_auth.authID
                    FROM as_menu
                    JOIN (SELECT * FROM as_auth WHERE authGroupID = {$group_id}) as_auth ON (as_menu.menuID = as_auth.authMenuID)
                    WHERE as_menu.menuParentID = 0 AND as_menu.menuStatus = 1
                    ORDER BY as_menu.menuOrder ASC";
        $query  = $CI->db->query($sql);
        if($query->num_rows() > 0) {

            $first_level = $query->result();
            foreach($first_level as $level_1) {

                $sql2   = "SELECT as_menu.*, as_auth.authID
                            FROM as_menu
                            JOIN (SELECT * FROM as_auth WHERE authGroupID = {$group_id}) as_auth ON (as_menu.menuID = as_auth.authMenuID)
                            WHERE as_menu.menuParentID = {$level_1->menuID} AND as_menu.menuStatus = 1
                            ORDER BY as_menu.menuOrder ASC";
                $query2 = $CI->db->query($sql2);
                if($query2->num_rows() > 0) {

                    $first_lev_id   = parent_menu_id($CI->uri->segment(1));
                    $first_active   = ($first_lev_id == $level_1->menuID) ? 'kt-menu__item--open kt-menu__item--here' : '';
                    $html .= '
                        <li class="kt-menu__item  kt-menu__item--submenu '.$first_active.'" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <i class="kt-menu__link-icon '.$level_1->menuIcon.'"></i>
                                <span class="kt-menu__link-text">'.$level_1->menuName.'</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="kt-menu__submenu ">
                                <span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
                                        <span class="kt-menu__link"><span class="kt-menu__link-text">'.$level_1->menuName.'</span></span>
                                    </li>';
                    $second_level   = $query2->result();
                    foreach($second_level as $level_2) {
                        
                        $second_level_uri   = $CI->uri->segment(1);
                        $second_active      = ($second_level_uri == $level_2->menuUri) ? 'kt-menu__item--active' : '';
                        $html .= '
                            <li class="kt-menu__item '.$second_active.'" aria-haspopup="true">
                                <a href="'.site_url($level_2->menuUri).'" class="kt-menu__link ">
                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="kt-menu__link-text">'.$level_2->menuName.'</span>
                                </a>
                            </li>';
                    }

                    $html .= '</ul></div></li>';
                } else {
                    $single_first_uri       = $CI->uri->segment(1);
                    $single_first_active    = ($single_first_uri == $level_1->menuUri || $single_first_uri == '') ? 'kt-menu__item--active' : '';
                    $html .= '
                        <li class="kt-menu__item  '.$single_first_active.'" aria-haspopup="true">
                            <a href="'.$level_1->menuUri.'" class="kt-menu__link ">
                                <i class="kt-menu__link-icon '.$level_1->menuIcon.'"></i>
                                <span class="kt-menu__link-text">'.$level_1->menuName.'</span>
                            </a>
                        </li>';
                }
            }

            $html .= '</ul>';
        }

        return $html;
    }
}

if(!function_exists('parent_menu_id')) {

    function parent_menu_id(String $uri)
    {
        $CI =& get_instance();
        $CI->db->select('menuParentID');
        $CI->db->where('menuUri', $uri);
        $query = $CI->db->get('as_menu');
        if($query->num_rows() > 0) {
            $row = $query->row();
            return $row->menuParentID;
        } else {
            return array();
        }
    }
}

if(!function_exists('generate_breadcumb')) {

    function generate_breadcumb() {
        
        $CI =& get_instance();
        $uri    = ($CI->uri->segment(1) == '') ? 'dashboard' : $CI->uri->segment(1);
        $query  = $CI->db->get_where('as_menu', array('menuUri' => $uri))->row();
        $query2 = $CI->db->get_where('as_menu', array('menuID' => $query->menuParentID));
        $html   = '';
        if($query2->num_rows() > 0) {
            $html .= '<div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title">
                            '.$query->menuName.' </h3>
                        <span class="kt-subheader__separator kt-hidden"></span>
                        <div class="kt-subheader__breadcrumbs">
                            <a href="'.site_url('dashboard').'" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <a href="#" class="kt-subheader__breadcrumbs-link">
                                '.$query2->row()->menuName.'
                            </a>
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <a href="'.site_url($query->menuUri).'" class="kt-subheader__breadcrumbs-link">
                                '.$query->menuName.'
                            </a>
                        </div>
                    </div>
                </div>
            </div>';
        } else {
            $html .= '<div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title">
                            '.$query->menuName.' </h3>
                        <span class="kt-subheader__separator kt-hidden"></span>
                        <div class="kt-subheader__breadcrumbs">
                            <a href="'.site_url('dashboard').'" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <a href="'.site_url($query->menuUri).'" class="kt-subheader__breadcrumbs-link">
                                '.$query->menuName.'
                            </a>
                        </div>
                    </div>
                </div>
            </div>';
        }

        return $html;
    }
}

if(!function_exists('generate_button')) {

    function generate_button(String $uri, String $action, String $button) {
        
        $CI =& get_instance();
        $CI->load->library('session');

        $group_id = $CI->session->userdata('group');

        $sql    = "SELECT as_group.groupID, as_menu.menuName, as_menu.menuUri, as_auth.{$action}
                    FROM as_group
                    JOIN as_auth ON (as_group.groupID = as_auth.authGroupID)
                    JOIN as_menu ON (as_auth.authMenuID = as_menu.menuID)
                    WHERE as_group.groupID = {$group_id} AND as_menu.menuUri = '{$uri}'";
        $query  = $CI->db->query($sql)->row_array();

        if(intval($query[$action]) === 0) {
            return '';
        } else {
            return $button;
        }
    }
}

if( !function_exists('autonumber') ) {

    function autonumber($table = '', $column = '', $initial = '')
    {
        $CI =& get_instance();
        $CI->db->select('RIGHT('.$column.',4) as counter', FALSE);
        $CI->db->order_by($column, 'DESC');
        $CI->db->limit(1);
        $query  = $CI->db->get($table);
        if($query->num_rows() > 0) {
            $row        = $query->row();
            $counter    = intval($row->counter) + 1;
        } else {
            $counter    = 1;
        }

        $max_counter    = str_pad($counter, 4, "0", STR_PAD_LEFT);
        if($initial !== '') {
            $code   = $initial.$max_counter;
        } else {
            $code   = date('Y-m-d').$max_counter;
        }

        return $code;
    }
}

/* End of file global_helper.php */
