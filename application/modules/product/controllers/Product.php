<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Product_model', 'prod_model');
        $this->load->model('category/Category_model', 'cat_model');
        $this->load->model('brand/Brand_model', 'brand_model');
        $this->load->model('supplier/Supplier_model', 'supp_model');
    }
    
    public function index()
    {
        if($this->input->is_ajax_request()) {
            $rows = $this->prod_model->product_list();
            echo json_encode($rows, JSON_PRETTY_PRINT);
            exit;
        }

        $data['title']      = "Produk";
        $data['content']    = "index";
        $data['categories'] = $this->cat_model->read_all();
        $data['brands']     = $this->brand_model->read_all();
        $data['suppliers']  = $this->supp_model->read_all();
        $this->load->view('default', $data);
    }

    public function save()
    {
        $productBarcode     = $this->input->post('productBarcode');
        $productName        = $this->input->post('productName');
        $supplierID         = $this->input->post('supplierID');
        $categoryID         = $this->input->post('categoryID');
        $brandID            = $this->input->post('brandID');
        $productBuyPrice    = $this->input->post('productBuyPrice');
        $productSalePrice   = $this->input->post('productSalePrice');
        $productDiscount    = $this->input->post('productDiscount');
        $productStock       = $this->input->post('productStock');
        $productNote        = $this->input->post('productNote');
        
        $data   = array(
            'productBarcode'    => $productBarcode,
            'productName'       => $productName,
            'supplierID'        => $supplierID,
            'categoryID'        => $categoryID,
            'brandID'           => $brandID,
            'productBuyPrice'   => $productBuyPrice,
            'productSalePrice'  => $productSalePrice,
            'productDiscount'   => $productDiscount,
            'productStock'      => $productStock,
            'productNote'       => $productNote
        );

        $insert = $this->prod_model->create($data);
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
        $productID = $this->input->post('productID');
        $key    = array('productID' => $productID);

        $data   = $this->prod_model->read_by($key);

        $response['code']   = 200;
        $response['msg']    = "Success";
        $response['data']   = $data->row();

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    public function update()
    {
        $productID          = $this->input->post('productID');
        $productBarcode     = $this->input->post('productBarcode');
        $productName        = $this->input->post('productName');
        $supplierID         = $this->input->post('supplierID');
        $categoryID         = $this->input->post('categoryID');
        $brandID            = $this->input->post('brandID');
        $productBuyPrice    = $this->input->post('productBuyPrice');
        $productSalePrice   = $this->input->post('productSalePrice');
        $productDiscount    = $this->input->post('productDiscount');
        $productStock       = $this->input->post('productStock');
        $productNote        = $this->input->post('productNote');
        
        $data   = array(
            'productBarcode'    => $productBarcode,
            'productName'       => $productName,
            'supplierID'        => $supplierID,
            'categoryID'        => $categoryID,
            'brandID'           => $brandID,
            'productBuyPrice'   => $productBuyPrice,
            'productSalePrice'  => $productSalePrice,
            'productDiscount'   => $productDiscount,
            'productStock'      => $productStock,
            'productNote'       => $productNote
        );
        
        $key    = array('productID' => $productID);

        $update = $this->prod_model->update($key, $data);
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
        $productID = $this->input->post('productID');
        
        $key    = array('productID' => $productID);
        $this->prod_model->delete($key);

        $response['code']   = 200;
        $response['msg']    = "Berhasil menghapus data";

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

}

/* End of file Product.php */
