<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    /**
     * Set table name
     *
     * @var string
     */
    protected $table = 'as_users';

    /**
     * Get user login data
     *
     * @param String $username
     * @param String $password
     * @return void
     */
    public function get_login(String $username, String $password)
    {
        $this->db->where('userName', $username);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0) {
            
            $user_data  = $query->row();
            if($user_data->userPassword === $password) {

                if($user_data->userBlocked === 'N') {

                    $user_session   = array(
                        'id'        => $user_data->userID,
                        'nip'       => $user_data->userNIP,
                        'name'      => $user_data->userFullName,
                        'group'     => $user_data->userLevel,
                        'is_login'  => TRUE
                    );

                    $this->session->set_userdata($user_session);

                    $response['code']   = 200;
                    $response['msg']    = 'Berhasil login';
                    $response['data']   = site_url('dashboard');

                } else {

                    $response['code']   = 500;
                    $response['msg']    = 'User dalam status diblokir. Silahkan hubungi administrator';
                    $response['data']   = NULL;

                }

            } else {

                $response['code']   = 500;
                $response['msg']    = 'Password Anda salah';
                $response['data']   = NULL;

            }
        } else {
            
            $response['code']   = 404;
            $response['msg']    = 'Username tidak ditemukan';
            $response['data']   = NULL;
            
        }

        return $response;
    }

}

/* End of file Login_model.php */
