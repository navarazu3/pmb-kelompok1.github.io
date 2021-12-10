<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(['Auth_model', 'Admin_model']);

        $this->auth = $this->Auth_model;
        $this->user = $this->Admin_model;
    }

    public function index()
    {
        redirect('auth/login');
    }

    public function welcome()
    {
        $this->template->load('template/welcome_template', 'welcome/index');
    }

    public function login()
    {
        if (isset($_POST['submit']))
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            /**
             *  Verify process and storing user_id to session
             */
            $verify = $this->auth->verify($username, $password);

            if ($verify == 1) {
                /* Set session of status login if success */
                $this->session->set_userdata('login_status', 'ok');

                /* Update column = ['is_logged_in', 'last_login'] */
                $this->user->logged($this->session->userdata('id'));

                redirect('dashboard');
            } elseif ($verify == 2) {
                $this->session->set_userdata('error', 'Username atau Password salah');
                redirect('auth/login');
            } else {
                /* Destory session if failed */
                // $this->session->sess_destroy();
                $this->session->set_userdata(['error' => 'Error!! Username atau password salah']);
                redirect('auth/login');
            }
        } elseif (isset($_POST['submit_register'])) {
            redirect('auth/register');
        } else {
            $data['error'] = $this->session->userdata('error');

            $this->load->view('login_form', $data);
            // $this->load->view('auth/index');
        }
    }
    
    public function register()
    {
        if (isset($_POST['submit'])) {
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['division'] = $this->input->post('division');
            $data['email'] = $this->input->post('email');
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['avatar'] = 'default.jpeg';
            
            $this->db->insert('users', $data);

            redirect('auth');
        } else {
            $this->template->load('template/login_template', 'register/index');
        }
    }

    public function logout()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('admin', ['is_logged_in' => 0]);

        $this->session->sess_destroy();

        redirect('auth/index');
    }
}
