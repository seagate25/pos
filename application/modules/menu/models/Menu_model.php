<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Menu Model
 * @author seagate25 <sigidh.budi@gmail.com>
 * @copyright 2019 Sigit Budi Setiyono
 */
class Menu_model extends CI_Model {

    /**
     * Set table name
     *
     * @var string
     */
    protected $table = 'as_menu';

    /**
     * Showing list of menu
     * Based on DataTables server side
     *
     * @return void
     */
    public function menu_list()
    {
        $start = $this->input->post('start');
        $length = $this->input->post('length') != -1 ? $this->input->post('length') : 10;
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');
        $order = $this->input->post('order');
        $order_column = $order[0]['column'];
        $order_dir = strtoupper($order[0]['dir']);

        $field = array(
            1   => 'as_menu.menuName',
            2   => 'as_menu_aka.menuName',
            3   => 'as_menu.menuUri',
            4   => 'as_menu.menuIcon',
            5   => 'as_menu.menuOrder'
        );

        $order_column = $field[$order_column];

        $where = "";

        if (!empty($search['value'])) {
            $where .= " WHERE as_menu.menuName LIKE '%" . $search['value'] . "%'";
            $where .= " OR as_menu_aka.menuName LIKE '%" . $search['value'] . "%'";
            $where .= " OR as_menu.menuUri LIKE '%" . $search['value'] . "%'";
            $where .= " OR as_menu.menuIcon LIKE '%" . $search['value'] . "%'";
            $where .= " OR as_menu.menuOrder LIKE '%" . $search['value'] . "%'";
        }

        $sql = "SELECT as_menu.*, as_menu_aka.menuName AS parent_name
                FROM {$this->table}
                LEFT JOIN {$this->table} as_menu_aka ON (as_menu.menuParentID = as_menu_aka.menuID)
                {$where} ";

        $query = $this->db->query($sql);
        $records_total = $query->num_rows();

        $sql .= " ORDER BY " . $order_column . " {$order_dir}";
        $sql .= " LIMIT {$length} OFFSET {$start}";

        $query = $this->db->query($sql);
        $rows_data = $query->result();

        $rows = array();
        $i = ($start + 1);
        foreach ($rows_data as $row) {
            $row->menuID        = $row->menuID;
            $row->number        = $i;
            $row->menuName      = $row->menuName;
            $row->parent_name   = $row->parent_name;
            $row->menuUri       = $row->menuUri;
            $row->menuIcon      = $row->menuIcon;
            $row->menuOrder     = $row->menuOrder;
            $row->menuStatus    = $row->menuStatus;
            $row->actions = 
                generate_button('menu', 'authUpdate', '<button type="button" onclick="Actions.edit('.$row->menuID.')" class="btn btn-success btn-elevate btn-xs"><i class="flaticon-edit position-left"></i> Edit</button>')
                .' '.
                generate_button('menu', 'authDelete', '<button type="button" onclick="Actions.delete('.$row->menuID.')" class="btn btn-danger btn-elevate btn-xs"><i class="flaticon-cancel position-left"></i> Hapus</button>');

            $rows[] = $row;
            $i++;
        }

        return array(
            'draw' => $draw,
            'recordsTotal' => $records_total,
            'recordsFiltered' => $records_total,
            'data' => $rows
        );
    }

    /**
     * Create menu and store into database
     *
     * @return void
     */
    public function create(Array $data)
    {
        $data['createdUserID']  = $this->session->userdata('id');
        $data['createdDate']    = date('Y-m-d H:i:s');

        $this->db->insert($this->table, $data);

        return $this->db->affected_rows();
    }

    /**
     * Read / Select row and showing into view
     *
     * @return void
     */
    public function read_by(Array $key)
    {
        $this->db->where($key);
        $query = $this->db->get($this->table);
        
        return $query;
    }

    /**
     * Update menu and updating into database
     *
     * @return void
     */
    public function update(Array $key, Array $data)
    {
        $data['modifiedUserID']  = $this->session->userdata('id');
        $data['modifiedDate']    = date('Y-m-d H:i:s');

        $this->db->where($key);
        $query = $this->db->update($this->table, $data);

        return $this->db->affected_rows();
    }

    /**
     * Delete menu and deleting from database
     *
     * @return void
     */
    public function delete(Array $key)
    {
        $this->db->where($key);
        $this->db->delete($this->table);
    }

    /**
     * Get all menu records from database
     *
     * @return void
     */
    public function read_all()
    {
        $query = $this->db->get($this->table);

        return $query->result();
    }

}

/* End of file Menu_model.php */
