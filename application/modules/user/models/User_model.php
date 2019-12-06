<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    /**
     * Set table name
     *
     * @var string
     */
    protected $table = 'as_users';

    public function user_list()
    {
        $start = $this->input->post('start');
        $length = $this->input->post('length') != -1 ? $this->input->post('length') : 10;
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');
        $order = $this->input->post('order');
        $order_column = $order[0]['column'];
        $order_dir = strtoupper($order[0]['dir']);

        $field = array(
            1   => 'as_users.userNIP',
            2   => 'as_users.userFullName',
            3   => 'as_users.userPhone',
            4   => 'as_group.groupName',
            5   => 'as_users.userName'
        );

        $order_column = $field[$order_column];

        $where = "";

        if (!empty($search['value'])) {
            $where .= " WHERE as_users.userNIP LIKE '%" . $search['value'] . "%'";
            $where .= " OR as_users.userFullName LIKE '%" . $search['value'] . "%'";
            $where .= " OR as_users.userPhone LIKE '%" . $search['value'] . "%'";
            $where .= " OR as_group.groupName LIKE '%" . $search['value'] . "%'";
            $where .= " OR as_users.userName LIKE '%" . $search['value'] . "%'";
        }

        $sql = "SELECT as_users.*, as_group.groupName
                FROM {$this->table}
                JOIN as_group ON (as_users.userLevel = as_group.groupID){$where}";

        $query = $this->db->query($sql);
        $records_total = $query->num_rows();

        $sql .= " ORDER BY " . $order_column . " {$order_dir}";
        $sql .= " LIMIT {$length} OFFSET {$start}";

        $query = $this->db->query($sql);
        $rows_data = $query->result();

        $rows = array();
        $i = ($start + 1);
        foreach ($rows_data as $row) {
            $row->userID        = $row->userID;
            $row->number        = $i;
            $row->userNIP       = $row->userNIP;
            $row->userFullName  = $row->userFullName;
            $row->userPhone     = $row->userPhone;
            $row->groupName     = $row->groupName;
            $row->userBlocked   = $row->userBlocked;
            $row->userName      = $row->userName;
            $row->actions = 
                generate_button('menu', 'authUpdate', '<button type="button" onclick="Actions.edit('.$row->userID.')" class="btn btn-success btn-elevate btn-xs"><i class="flaticon-edit position-left"></i> Edit</button>')
                .' '.
                generate_button('menu', 'authDelete', '<button type="button" onclick="Actions.delete('.$row->userID.')" class="btn btn-danger btn-elevate btn-xs"><i class="flaticon-cancel position-left"></i> Hapus</button>');

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

    public function read_by(Array $key)
    {
        $this->db->where($key);
        return $this->db->get($this->table);
    }

    public function read_all()
    {
        return $this->db->get($this->table);
    }

    public function create(Array $data)
    {
        $data['createdDate']    = date('Y-m-d H:i:s');
        $data['createdUserID']  = $this->session->userdata('id');

        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    public function update(Array $key, Array $data)
    {
        $data['modifiedDate']   = date('Y-m-d H:i:s');
        $data['modifiedUserID'] = $this->session->userdata('id');

        $this->db->where($key);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
    }

    public function delete(Array $key)
    {
        $this->db->where($key);
        $this->db->delete($this->table);
    }

}

/* End of file User_model.php */
