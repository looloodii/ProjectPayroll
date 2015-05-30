<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller
{

    function __construct()

    {

        parent::__construct();

        #$this->load->helper('url');

        $this->load->model('employee_model');

    }

    public function index()

    {

        $data['employee_list'] = $this->employee_model->get_all_employees();

        $this->load->view('show_employees', $data);

    }

    public function add()

    {

        $this->load->view('create_employee');

    }

    public function insert_new_employee()

    {

        $udata['number'] = $this->input->post('number');

        $udata['username'] = $this->input->post('username');

        $udata['password'] = md5($this->input->post('password'));

        $udata['firstname'] = $this->input->post('firstname');

        $udata['lastname'] = $this->input->post('lastname');

        $udata['middle_initial'] = $this->input->post('middle_initial');


        $res = $this->employee_model->insert_employee_to_db($udata);

        if ($res) {

            header('location:' . base_url() . "employee/" . $this->index());

        }

    }

    public function edit(){

        $id = $this->uri->segment(3);
        $data['employee'] = $this->employee_model->getById($id);
        $this->load->view('edit_employee', $data);
    }

    public function update()

    {

        $mdata['number'] = $this->input->post('number');

        $mdata['username'] = $this->input->post('username');

        $mdata['firstname'] = $this->input->post('firstname');

        $mdata['lastname'] = $this->input->post('lastname');

        $mdata['middle_initial'] = $this->input->post('middle_initial');

        $res=$this->employee_model->update_info($mdata, $_POST['id']);

        if($res){

            header('location:'.base_url()."employee/".$this->index());

        }

    }

    public function delete($id)
    {

        $this->employee_model->delete_an_employee($id);

        $this->index();

    }




}
