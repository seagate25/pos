<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Sales_model', 'sales_model');
        
    }
    
    public function index()
    {
        $data['title']      = "Penjualan (Kasir)";
        $data['content']    = "index";
        $this->load->view('default', $data);
    }

}

/* End of file Sales.php */
