<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

    /**
     * Set table name
     *
     * @var string
     */
    protected $table = 'as_suppliers';

    public function supplier_list()
    {
        $start = $this->input->post('start');
        $length = $this->input->post('length') != -1 ? $this->input->post('length') : 10;
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');
        $order = $this->input->post('order');
        $order_column = $order[0]['column'];
        $order_dir = strtoupper($order[0]['dir']);

        $field = array(
            1   => 'supplierCode',
            2   => 'supplierName',
            3   => 'supplierAddress',
            4   => 'supplierPhone',
            5   => 'supplierFax',
            6   => 'supplierContactPerson',
            7   => 'supplierCPHp'
        );

        $order_column = $field[$order_column];

        $where = "";

        if (!empty($search['value'])) {
            $where .= " WHERE supplierCode LIKE '%" . $search['value'] . "%'";
            $where .= " OR supplierName LIKE '%" . $search['value'] . "%'";
            $where .= " OR supplierAddress LIKE '%" . $search['value'] . "%'";
            $where .= " OR supplierPhone LIKE '%" . $search['value'] . "%'";
            $where .= " OR supplierFax LIKE '%" . $search['value'] . "%'";
            $where .= " OR supplierContactPerson LIKE '%" . $search['value'] . "%'";
            $where .= " OR supplierCPHp LIKE '%" . $search['value'] . "%'";
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
            $row->number                = $i;
            $row->supplierID            = $row->supplierID;
            $row->supplierCode          = $row->supplierCode;
            $row->supplierName          = $row->supplierName;
            $row->supplierAddress       = $row->supplierAddress;
            $row->supplierPhone         = $row->supplierPhone;
            $row->supplierFax           = $row->supplierFax;
            $row->supplierContactPerson = $row->supplierContactPerson;
            $row->supplierCPHp          = $row->supplierCPHp;
            $row->supplierStatus        = $row->supplierStatus;
            $row->actions = 
                generate_button('supplier', 'authUpdate', '<button type="button" onclick="Actions.edit('.$row->supplierID.')" class="btn btn-success btn-elevate btn-icon btn-xs"><i class="flaticon-edit position-left"></i></button>')
                .' '.
                generate_button('supplier', 'authDelete', '<button type="button" onclick="Actions.delete('.$row->supplierID.')" class="btn btn-danger btn-elevate btn-icon btn-xs"><i class="flaticon-cancel position-left"></i></button>');

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

/* End of file Supplier_model.php */
