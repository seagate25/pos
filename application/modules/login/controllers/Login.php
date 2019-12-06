<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author seagate25 <sigidh.budi@gmail.com>
 * @copyright 2019 Sigit Budi Setiyono
 */

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login_model');
        $this->load->library('session');
    }
    
    public function index()
    {
        $this->load->view('index');
    }

    public function do_login()
    {
        $username   = $this->input->post('username');
        $password   = md5($this->input->post('password'));
        
        $login      = $this->login_model->get_login($username, $password);

        echo json_encode($login, JSON_PRETTY_PRINT);
        exit;
    }

    public function do_logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Login.php */
