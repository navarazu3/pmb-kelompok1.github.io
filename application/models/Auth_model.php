<?php

class Auth_model extends CI_Model
{
    public function verify($username, $password)
    {
        $user = $this->db->get_where('mhs', ['email' => $username, 'password' => $password]);

        $data = $user->row_array();
        $user_array = $user->row_array();

        if ($user->num_rows() > 0) {
            if ($user_array['is_activated'] == '1') {
                $this->session->set_userdata([
                    'npm' => $data['npm'],
                    'nama' => $data['nama']
                ]);
                return 1;
            } else {
                $this->session->set_userdata('error', 'Email atau Password salah');
                redirect('auth/login');
            }
        } else {
            return 0;
        }
    }
}