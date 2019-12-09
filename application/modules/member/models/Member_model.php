<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

    /**
     * Set table name
     *
     * @var string
     */
    protected $table = 'as_members';

    public function member_list()
    {
        $start = $this->input->post('start');
        $length = $this->input->post('length') != -1 ? $this->input->post('length') : 10;
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');
        $order = $this->input->post('order');
        $order_column = $order[0]['column'];
        $order_dir = strtoupper($order[0]['dir']);

        $field = array(
            1   => 'memberCode',
            2   => 'memberFullName',
            3   => 'memberAddress',
            4   => 'memberPhone'
        );

        $order_column = $field[$order_column];

        $where = "";

        if (!empty($search['value'])) {
            $where .= " WHERE memberCode LIKE '%" . $search['value'] . "%'";
            $where .= " OR memberFullName LIKE '%" . $search['value'] . "%'";
            $where .= " OR memberAddress LIKE '%" . $search['value'] . "%'";
            $where .= " OR memberPhone LIKE '%" . $search['value'] . "%'";
        }

        $sql = "SELECT * FROM {$this->table}{$where}";

        $query = $this->db->query($sql);
        $records_total = $query->num_rows();

        $sql .= " ORDER BY " . $order_column . " {$order_dir}";
        $sql .= " LIMIT {$length} OFFSET {$start}";

        $query = $this->db->query($sql);
        $rows_data = $query->result();

        $rows = array();
        $i = ($start + 1);
        foreach ($rows_data as $row) {
            $row->memberID        = $row->memberID;
            $row->number          = $i;
            $row->memberCode      = $row->memberCode;
            $row->memberFullName  = $row->memberFullName;
            $row->memberAddress   = $row->memberAddress;
            $row->memberPhone     = $row->memberPhone;
            $row->actions = 
                generate_button('member', 'authUpdate', '<button type="button" onclick="Actions.edit('.$row->memberID.')" class="btn btn-success btn-elevate btn-xs"><i class="flaticon-edit position-left"></i> Edit</button>')
                .' '.
                generate_button('member', 'authDelete', '<button type="button" onclick="Actions.delete('.$row->memberID.')" class="btn btn-danger btn-elevate btn-xs"><i class="flaticon-cancel position-left"></i> Hapus</button>');

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

    public function create(Array $data)
    {
        $data['createdDate']    = date('Y-m-d H:i:s');
        $data['createdUserID']  = $this->session->userdata('id');

        $this->db->insert($this->table, $data);

        return $this->db->affected_rows();
    }

    public function read_by(Array $key)
    {
        $this->db->where($key);
        return $this->db->get($this->table);
    }

    public function read_all()
    {
        return $this->db->get($this->table)->result();
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

/* End of file Member_model.php */
