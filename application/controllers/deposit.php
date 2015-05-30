<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Deposit extends CI_Controller
{

    function __construct()

    {

        parent::__construct();

        #$this->load->helper('url');

        $this->load->model('deposit_model');
        $this->load->model('employee_model');

    }

    public function index()

    {

        $data['deposit_list'] = $this->deposit_model->get_all_deposits();

        $this->load->view('show_deposits', $data);

    }

    public function add()

    {
        $data['employee_list'] = $this->employee_model->get_employee_names();
        $this->load->view('create_deposit', $data);

    }

    public function insert_new_deposit()

    {

        $udata['employee_username'] = $this->input->post('employee_username');

        $udata['disbursement_voucher_number'] = $this->input->post('disbursement_voucher_number');

        $udata['description'] = $this->input->post('description');

        $udata['amount'] = $this->input->post('amount');

        $udata['deposit_date'] = $this->input->post('deposit_date');

        $udata['bank_account'] = $this->input->post('bank_account');


        $res = $this->deposit_model->insert_deposit_to_db($udata);

        if ($res) {

            header('location:' . base_url() . "deposit/" . $this->index());

        }

    }

    public function edit(){

        $id = $this->uri->segment(3);
        $data['deposit'] = $this->deposit_model->getById($id);
        $data['employee_list'] = $this->employee_model->get_employee_names();
        $this->load->view('edit_deposit', $data);
    }

    public function update()

    {

        $mdata['employee_username'] = $this->input->post('employee_username');

        $mdata['disbursement_voucher_number'] = $this->input->post('disbursement_voucher_number');

        $mdata['description'] = $this->input->post('description');

        $mdata['amount'] = $this->input->post('amount');

        $mdata['deposit_date'] = $this->input->post('deposit_date');

        $mdata['bank_account'] = $this->input->post('bank_account');


        $res=$this->deposit_model->update_info($mdata, $_POST['id']);

        if($res){

            header('location:'.base_url()."deposit/".$this->index());

        }

    }

    public function delete($id)
    {

        $this->deposit_model->delete_a_deposit($id);

        $this->index();

    }


}
