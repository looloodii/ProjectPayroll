<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()

    {
        parent::__construct();

        #$this->load->helper('url');
        $this->load->model('deposit_model');

    }

    public function index()

    {

        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['role'] = $session_data['role'];

            if($session_data['role']=="ADMIN"){
                $data['deposit_list'] = $this->deposit_model->get_all_deposits();
                $this->load->view('show_deposits', $data);

            }else{
                $data['deposit_list'] = $this->deposit_model->get_my_deposits($session_data['username']);
                $this->load->view('show_dashboard', $data);
            }


        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }


}
